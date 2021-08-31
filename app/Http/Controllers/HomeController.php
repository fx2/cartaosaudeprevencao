<?php

namespace App\Http\Controllers;

use App\Models\Vendas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vendas = Vendas::selectRaw("
                    count(vendas.id) as qtd,
                    pricings.id,
                    pricings.title
                ")
                ->join('pricings', 'pricings.id', 'vendas.plans_id')
                ->orderByRaw("COUNT(vendas.plans_id)")
                ->groupBy('pricings.id')
                ->get();

        $vendedores = Vendas::selectRaw("
                    count(vendas.id) as qtd,
                    users.name
                ")
                ->join('vendedores', 'vendedores.id', 'vendas.vendedor_id')
                ->join('users', 'users.id', 'vendedores.user_id')
                ->orderByRaw("COUNT(vendas.plans_id)")
                ->groupBy('vendedores.id')
                ->get();

        return view('home', compact('vendas', 'vendedores'));
    }

    public function test() {
        return json_encode('pei');
    }
}
