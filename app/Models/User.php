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

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.sandbox.cloud.galaxpay.com.br/v2/token',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_USERPWD => '{
            "username": 5473,
            "password": "83Mw5u8988Qj6fZqS4Z8K7LzOo1j28S706R0BeFe"
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

    public function getTokenGalaxPayBoleto()
    {    
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.sandbox.cloud.galaxpay.com.br/v2/subscriptions',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "myId": "pay-611a980fc24270.70131949",
            "planMyId": "pay-611a764f0fe594.10589875",
            "firstPayDayDate": "2021-08-16",
            "additionalInfo": "Lorem ipsum dolor sit amet.",
            "mainPaymentMethodId": "boleto",
            "value": 1000,
            "Customer": {
                "myId": "pay-611a892d388f82.01420870",
                "name": "Lorem ipsum dolor sit amet.",
                "document": "92857826800",
                "emails": [
                    "teste2957email9726@galaxpay.com.br",
                    "teste2842email5817@galaxpay.com.br"
                ],
                "phones": [
                    3140201512,
                    31983890110
                ],
                "Address": {
                    "zipCode": "30411330",
                    "street": "Rua platina",
                    "number": "1330",
                    "complement": "2º andar",
                    "neighborhood": "Prado",
                    "city": "Belo Horizonte",
                    "state": "MG"
                }
            },
            "PaymentMethodCreditCard": {
                "Card": {
                    "myId": "pay-6116b48f7280a3.43667231",
                    "number": "4111 1111 1111 1111",
                    "holder": "JOAO J J DA SILVA",
                    "expiresAt": "2021-08",
                    "cvv": "363"
                }
            },
            "PaymentMethodBoleto": {
                "fine": 100,
                "interest": 200,
                "instructions": "Lorem ipsum dolor sit amet.",
                "deadlineDays": 1,
                "value":15
            }
        }',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer 82b4562197d13b5d6d5b47fb46955bd9ae5a5ce0',
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
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

        foreach ($galaxy['Subscription']['Transactions'] as $key => $value) {
            $user->transactions()->create($value);
        }

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

        $res = $this->buildJsonTOSendPostPlainBoleto($user, $request, $planosSaudes);

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
        
        $boleto['fine'] = 100;
        $boleto['interest'] = 200;
        $boleto['instructions'] = 'teste';
        $boleto['deadlineDays'] = 1;
        $boleto['discont_qtdDaysBeforePayDay'] = 1;

        $user->paymentMethodBoletos()->create($boleto);

        $user->telefones()->create($request->all()['telefones']);

        $user->enderecos()->create($request->all()['enderecos']);

        foreach ($galaxy['Subscription']['Transactions'] as $key => $value) {
            $user->transactions()->create($value);
        }

        return $galaxy;
    }

    public function buildJsonTOSendPostPlain($user, $request, $planosSaudes)
    {
        $expiresArray = explode('/', $request['cartao']['cartao_credito_expiresAt']);

        $cep = removeSymbols($request['enderecos']['zipCode'], ['-']);

        $phone = removeSymbols($request['telefones']['telefone'], ['-', '(', ')', ' ']);
        $myArr = array(
            "myId" => config('constants.pay_request') . $user->id,
            "planMyId" => env('APP_ENV') === 'production' ? $request['planosSaudes']['planMyId'] : "pay-611aad66d6f886.65207440",
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