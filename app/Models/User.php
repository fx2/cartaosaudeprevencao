<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\App;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'type',
        'document',
        'pay_customer',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function empresas()
    {
         return $this->hasMany('App\Models\Empresa');
    }

    public function enderecos()
    {
         return $this->hasMany('App\Models\Endereco');
    }

    public function planosSaudes()
    {
         return $this->hasMany('App\Models\PlanosSaude');
    }

    public function telefones()
    {
         return $this->hasMany('App\Models\Telefone');
    }

    public function paymentMethodCreditcards()
    {
        return $this->hasMany('App\Models\PaymentMethodCreditcard');
    }
    
    public function paymentMethodBoletos()
    {
        return $this->hasMany('App\Models\PaymentMethodBoleto');
    }
    
    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction');
    }

    public function getTokenGalaxPay()
    {    
        $curl = curl_init();
        $galaxPay = config('constants.galaxUrl') . 'token';
        curl_setopt_array($curl, array(
        CURLOPT_URL => $galaxPay,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_USERPWD => '{
            "username": "'.config('constants.galaxId').'",
            "password": "'.config('constants.galaxHash').'"
        }',
        CURLOPT_POSTFIELDS =>'{
            "grant_type": "authorization_code",
            "scope": "customers.read customers.write plans.read plans.write transactions.read transactions.write webhooks.write cards.read cards.write card-brands.read subscriptions.read subscriptions.write charges.read charges.write boletos.read"
        }',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic NTQ3Mzo4M013NXU4OTg4UWo2ZlpxUzRaOEs3THpPbzFqMjhTNzA2UjBCZUZl',
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response;
    }

    public function getTokenGalaxPayBoleto($request)
    {    
        $token = json_decode($this->getTokenGalaxPay(), true);

        $positionOne = substr(md5(rand ()), 0, 14);
        $positionTwo = rand(1000000, 9999999);
        $galaxUrl = config('constants.galaxUrl') . 'subscriptions';
        $string = $positionOne.'.'.$positionTwo;

        $POSTVARS = array(
            "myId"=> "pay-".$string,
            "planMyId"=> $request['planosSaudes']['planMyId'],
            "firstPayDayDate"=> date('Y-m-d'),
            "additionalInfo"=> "Informação adicional verificar",
            "mainPaymentMethodId"=> "boleto",
            "value" => $request['planosSaudes']['value'],
            "Customer"=> array(
                "myId"=> "pay-6116b48f64c599.25002392",
                "name"=> $request['users']['name'],
                "document"=> removeSymbols($request['users']['document'], ['.', '-']),
                "emails"=> [
                    $request['users']['email']
                ],
                "phones"=> [
                    removeSymbols($request['telefones']['telefone'], ['(', ')', '-', ' '])
                ],
                "Address"=> array(
                    "zipCode"=> removeSymbols($request['enderecos']['zipCode'], ['.', '-']),
                    "street"=> $request['enderecos']['street'],
                    "number"=> $request['enderecos']['number'],
                    "complement"=> $request['enderecos']['complement'],
                    "neighborhood"=> $request['enderecos']['neighborhood'],
                    "city"=> $request['enderecos']['city'],
                    "state"=> $request['enderecos']['state']
                )
            ),
            "PaymentMethodBoleto"=> array(
                "fine"=> 100,
                "interest"=> 200,
                "instructions"=> "Pague em casas lotéricas ou via PIX.",
                "deadlineDays"=> 1
            )
        );

        $headers = array(
            'Authorization: Bearer '. $token['access_token'],
            'Content-Type: application/json'
        );

        $ch = curl_init($galaxUrl);
        curl_setopt($ch, CURLOPT_POST ,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POSTVARS));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); 
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    public function cadastroCampanha($request)
    {
        $users = $request->all()['users'];
        $users['document'] = removeSymbols($users['document'], ['.', '-']);
        $users['password'] = Hash::make($users['document']);
        $users['pay_customer'] = config('constants.pay_customer');

        $findUser = User::where('email', $users['email'])->first();
        if (isset($findUser)) {
            $user = $findUser;
        } else {
            $user = User::create($users);
        }

        $planosSaudes = $request->all()['planosSaudes'];

        $res = $this->buildJsonTOSendPostPlain($user, $request, $planosSaudes);

        $gal = jwt_request(
            config('constants.galaxUrl') . 'subscriptions',
            $request->access_token,
            $res
        );

        $galaxy = json_decode($gal, true);
    
        if (!isset($galaxy['Subscription']))
            return 'chave_igual';

        $useragain = User::where('id', $user->id)->first();
        $useragain->pay_customer = $galaxy['Subscription']['Customer']['myId'];
        $useragain->save();

        if (!is_null($request->all()['empresas']['name']))
            $user->empresas()->create($request->all()['empresas']);

        $planosSaudes['pay_request'] = $res['myId'];  
        $planosSaudes['periodicity'] = $galaxy['Subscription']['periodicity'];
        $planosSaudes['planGalaxPayId'] = $galaxy['Subscription']['planGalaxPayId'];
        
        $user->planosSaudes()->create($planosSaudes);
        
        $cartaoCredito['pay_creditcard'] = $res['PaymentMethodCreditCard']['Card']['myId'];
        $cartaoCredito['number'] = $request->all()['cartao']['cartao_credito_number'];
        $cartaoCredito['holder'] = $request->all()['cartao']['cartao_credito_holder'];
        $cartaoCredito['expiresAt'] = $request->all()['cartao']['cartao_credito_expiresAt'];
        $cartaoCredito['cvv'] = $request->all()['cartao']['cartao_credito_cvv'];

        $user->paymentMethodCreditcards()->create($cartaoCredito);

        $user->telefones()->create($request->all()['telefones']);

        $user->enderecos()->create($request->all()['enderecos']);

        // foreach ($galaxy['Subscription']['Transactions'] as $key => $value) {
        //     $user->transactions()->create($value);
        // }

        return $galaxy;
    }

    public function cadastroCampanhaBoleto($request)
    {   
        $users = $request->all()['users'];
        $users['document'] = removeSymbols($users['document'], ['.', '-']);
        $users['password'] = Hash::make($users['document']);
        $users['pay_customer'] = config('constants.pay_customer');

        $findUser = User::where('email', $users['email'])->first();
        if (isset($findUser)) {
            $user = $findUser;
        } else {
            $user = User::create($users);
        }

        $planosSaudes = $request->all()['planosSaudes'];

        $boleto = $this->getTokenGalaxPayBoleto($request);
        $bol = json_decode($boleto, true);
        return $bol;
        
        if (!isset($bol['Subscription']))
            return 'chave_igual';

        $useragain = User::where('id', $user->id)->first();
        $useragain->pay_customer = $bol['Subscription']['Customer']['myId'];
        $useragain->save();

        if (!is_null($request->all()['empresas']['name']))
            $user->empresas()->create($request->all()['empresas']);

        $planosSaudes['pay_request'] = $bol['Subscription']['myId'];  
        $planosSaudes['periodicity'] = $bol['Subscription']['periodicity'];
        $planosSaudes['planGalaxPayId'] = $bol['Subscription']['planGalaxPayId'];
        
        $user->planosSaudes()->create($planosSaudes);
        
        $boletos['fine'] = 100;
        $boletos['interest'] = 200;
        $boletos['instructions'] = 'teste';
        $boletos['deadlineDays'] = 1;
        $boletos['discont_qtdDaysBeforePayDay'] = 1;
        $boletos['discont_type'] = '';
        $boletos['discont_value'] = 0;

        $user->paymentMethodBoletos()->create($boletos);

        $user->telefones()->create($request->all()['telefones']);

        $user->enderecos()->create($request->all()['enderecos']);

        // foreach ($galaxy['Subscription']['Transactions'] as $key => $value) {
        //     $user->transactions()->create($value);
        // }

        return $bol;
    }

    public function buildJsonTOSendPostPlain($user, $request, $planosSaudes)
    {
        $expiresArray = explode('/', $request['cartao']['cartao_credito_expiresAt']);

        $cep = removeSymbols($request['enderecos']['zipCode'], ['-']);

        $phone = removeSymbols($request['telefones']['telefone'], ['-', '(', ')', ' ']);
        $myArr = array(
            "myId" => config('constants.pay_request') . $user->id,
            "planMyId" => env('APP_ENV') === 'production' ? $request['planosSaudes']['planMyId'] : "pay-611acd109ea912.57521508",
            "firstPayDayDate" => date('Y-m-d'),
            "mainPaymentMethodId" => "creditcard",
            "Customer" => array(
                "myId" => $user->pay_customer . $user->id,
                "name" => $user->name,
                "document" => $user->document,
                "emails" => [
                    $user->email
                ],
                "phones" => [
                    $phone
                ],
                "invoiceHoldIss" => false,
                "password" => $request['document'],
                "Address" => array(
                    "zipCode" => $cep,
                    "street" => $request['enderecos']['street'],
                    "number" => $request['enderecos']['number'],
                    "complement" => $request['enderecos']['complement'],
                    "neighborhood" => $request['enderecos']['neighborhood'],
                    "city" => $request['enderecos']['city'],
                    "state" => $request['enderecos']['state'],
                )
            ),
            "PaymentMethodCreditCard" => array(
                "Card" => array(
                    "myId" => config('constants.pay_creditcard') . $user->id,
                    "number" => $request['cartao']['cartao_credito_number'],
                    "holder" => $request['cartao']['cartao_credito_holder'],
                    "expiresAt" => $expiresArray[1] . '-' . $expiresArray[0],
                    "cvv" => $request['cartao']['cartao_credito_cvv']
                ),
                "preAuthorize" => false,
                "cardOperatorId" => "bin",
            ),
            "InvoiceConfig" => array(
                "description" => "Avisar 1 dia antes do pagamento.",
                "type" => "onePerTransaction",
                "createOn" => "daysBeforePayDay",
                "qtdDaysBeforePayDay" => 1
            )
        );

        return $myArr;

    }

    public function buildJsonTOSendPostPlainBoleto($user, $request, $planosSaudes)
    {
        $cep = removeSymbols($request['enderecos']['zipCode'], ['-']);

        $phone = removeSymbols($request['telefones']['telefone'], ['-', '(', ')', ' ']);
        $myArr = array(
            "myId" => config('constants.pay_request') . $user->id,
            "planMyId" => env('APP_ENV') === 'production' ? $request['planosSaudes']['planMyId'] : "pay-611a764f0fe594.10589875",
            "firstPayDayDate" => date('Y-m-d'),
            "mainPaymentMethodId" => "boleto",
            "Customer" => array(
                "myId" => $user->pay_customer . $user->id,
                "name" => $user->name,
                "document" => $user->document,
                "emails" => [
                    $user->email
                ],
                "phones" => [
                    $phone
                ],
                "invoiceHoldIss" => false,
                "password" => $request['document'],
                "Address" => array(
                    "zipCode" => $cep,
                    "street" => $request['enderecos']['street'],
                    "number" => $request['enderecos']['number'],
                    "complement" => $request['enderecos']['complement'],
                    "neighborhood" => $request['enderecos']['neighborhood'],
                    "city" => $request['enderecos']['city'],
                    "state" => $request['enderecos']['state'],
                )
            ),

            "PaymentMethodBoleto" => array(
                "fine" => 100,
                "interest" => 200,
                "instructions" => "Lorem ipsum dolor sit amet.",
                "deadlineDays" => 1,
                "Discount" => array(
                    "qtdDaysBeforePayDay" => 1,
                    "type" => "percent",
                    "value" => 1500
                )
            ),
            "InvoiceConfig" => array(
                "description" => "Avisar 1 dia antes do pagamento.",
                "type" => "onePerTransaction",
                "createOn" => "daysBeforePayDay",
                "qtdDaysBeforePayDay" => 1
            )
        );

        return $myArr;

    }

    public function buildJsonTOSendPostWithoutPlain($user, $request, $planosSaudes)
    {
        $expiresArray = explode('/', $request['cartao']['cartao_credito_expiresAt']);

        $cep = removeSymbols($request['enderecos']['zipCode'], ['-']);

        $phone = removeSymbols($request['telefones']['telefone'], ['-', '(', ')', ' ']);
        $myArr = array(
            "myId" => config('constants.pay_request') . $user->id,
            "value" => $planosSaudes['value'],
            "quantity" => 12, // 0 significa que sempre vai cobrar
            "periodicity" => "monthly",
            "firstPayDayDate" => date('Y-m-d'),
            "additionalInfo" => "pay.",
            "mainPaymentMethodId" => "creditcard",
            "Customer" => array(
                "myId" => $user->pay_customer . $user->id,
                "name" => $user->name,
                "document" => $user->document,
                "emails" => [
                    $user->email
                ],
                "phones" => [
                    $phone
                ],
                "invoiceHoldIss" => false,
                "password" => $request['document'],
                "Address" => array(
                    "zipCode" => $cep,
                    "street" => $request['enderecos']['street'],
                    "number" => $request['enderecos']['number'],
                    "complement" => $request['enderecos']['complement'],
                    "neighborhood" => $request['enderecos']['neighborhood'],
                    "city" => $request['enderecos']['city'],
                    "state" => $request['enderecos']['state'],
                )
            ),
            "PaymentMethodCreditCard" => array(
                "Card" => array(
                    "myId" => config('constants.pay_creditcard') . $user->id,
                    "number" => $request['cartao']['cartao_credito_number'],
                    "holder" => $request['cartao']['cartao_credito_holder'],
                    "expiresAt" => $expiresArray[1] . '-' . $expiresArray[0],
                    "cvv" => $request['cartao']['cartao_credito_cvv']
                ),
                "cardOperatorId" => "bin",
            ),
            "InvoiceConfig" => array(
                "description" => "Lorem ipsum dolor sit amet.",
                "type" => "onePerTransaction",
                "createOn" => "daysBeforePayDay",
                "qtdDaysBeforePayDay" => 1
            )
            
        );

        // $myJSON = json_encode($myArr);

        return $myArr;

    }
}