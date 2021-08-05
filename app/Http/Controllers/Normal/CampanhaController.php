<?php

namespace App\Http\Controllers\Normal;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\User;
use App\Traits\CrudControllerTrait;
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

        return view('normal.cadastro.create', ['planMyId' => $plano->plainMyId, 'nomePlano' => $plano->title, 'value' => $plano->price]);
    }

    public function show($id)
    {
        return $this->user->getTokenGalaxPay();
    }

    public function store(Request $request)
    {
        return $this->user->cadastroCampanha($request);
    }
}
