<?php

namespace App\Http\Controllers\Vendas;

use App\Http\Controllers\Controller;
use App\Models\Vendas;
use App\Models\User;
use App\Models\PlanosSaude;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Vendas $venda)
    {
        $this->repository = $venda;
        $this->middleware('auth');
    }

    public function index()
    {
        $venda = $this->repository
                        ->selectRaw(
                            'vendas.id,
                            planos_saudes.nomePlano,
                            planos_saudes.value,
                            planos_saudes.qtd_vidas,
                            planos_saudes.created_at as data_compra'
                        )
                        ->leftJoin('planos_saudes', 'planos_saudes.id', 'vendas.planos_saude_id')
                        ->latest('vendas.created_at')
                        ->get();

        return view('admin.vendas.index', [
            'vendas' => $venda,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendedor $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venda = $this->repository
                        ->selectRaw(
                            'planos_saudes.nomePlano,
                            planos_saudes.value,
                            planos_saudes.qtd_vidas,
                            planos_saudes.created_at as data_compra,
                            vendedor.name as vendedor,
                            cliente.name as cliente,
                            cliente.document,
                            telefones.telefone'
                        )
                        ->leftJoin('planos_saudes', 'planos_saudes.id', 'vendas.planos_saude_id')
                        ->leftJoin('vendedores', 'vendedores.id', 'vendas.vendedor_id')
                        ->leftJoin('users as vendedor', 'vendedor.id', 'vendedores.user_id')
                        ->leftJoin('users as cliente', 'cliente.id', 'planos_saudes.user_id')
                        ->leftJoin('telefones', 'telefones.user_id', 'cliente.id')
                        ->where('vendas.id', $id)
                        ->first();

        if (!$venda)
            return redirect()->back();

        return view('admin.vendas.show', [
            'vendas' => $venda
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateCliente $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
