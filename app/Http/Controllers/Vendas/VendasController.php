<?php

namespace App\Http\Controllers\Vendas;

use App\Http\Controllers\Controller;
use App\Models\Vendedor;
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
    public function __construct(PlanosSaude $venda)
    {
        $this->repository = $venda;
        $this->middleware('auth');
    }

    public function index()
    {
        $venda = $this->repository
                        ->select(
                            'planos_saudes.id',
                            'planos_saudes.nomePlano',
                            'planos_saudes.value',
                            'planos_saudes.qtd_vidas',
                            'planos_saudes.created_at'
                        )
                        ->latest('planos_saudes.created_at')
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
                        ->select(
                            'users.name',
                            'users.email',
                            'users.document',
                            'planos_saudes.nomePlano',
                            'planos_saudes.value',
                            'planos_saudes.qtd_vidas'
                        )
                        ->leftJoin('users', 'users.id', 'planos_saudes.user_id')
                        // ->leftJoin('vendedores', 'vendedores.user_id', 'users.id')
                        // ->leftJoin('users as vendedor', 'vendedor.id', 'vendedores.user_id')
                        // ->leftJoin('vendas', 'vendas.vendedor_id', 'vendedores.id')
                        ->where('users.id', $id)
                        ->first();

        dd($venda);

        if (!$cliente)
            return redirect()->back();

        return view('admin.cliente.show', [
            'clientes' => $cliente
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
