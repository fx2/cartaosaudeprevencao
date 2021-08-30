<?php

namespace App\Http\Controllers\Normal;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\Vendedor;
use App\Models\User;
use App\Traits\CrudControllerTrait;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CampanhaController extends Controller
{
    use CrudControllerTrait;
    private $user;

    public function __construct(User $user){
        $this->model = $user;
        $this->path = 'normal.cadastro';
        $this->user = $user;
    }

    public function create(Request $request)    
    {
        $plano = Pricing::find($request->plano);
        $vendedores = Vendedor::join('users', 'users.id', 'vendedores.user_id')->get();

        return view('normal.cadastro.create', ['planMyId' => $plano->plainMyId, 'nomePlano' => $plano->title, 'value' => $plano->price, 'vendedores' => $vendedores]);
    }

    public function show($id)
    {
        return $this->user->getTokenGalaxPay();
    }

    public function getTokenBoleto(Request $request)
    {
        // return $this->user->getTokenGalaxPayBoleto($request);
    }

    public function store(Request $request)
    {
        return $this->user->cadastroCampanha($request);
    }

    public function salvaBoleto(Request $request)
    {
        return $this->user->cadastroCampanhaBoleto($request);
    }
}
