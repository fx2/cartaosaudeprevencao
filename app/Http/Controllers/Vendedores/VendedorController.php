<?php

namespace App\Http\Controllers\Vendedores;

use App\Http\Controllers\Controller;
use App\Models\Vendedor;
use App\Models\User;
use App\Models\Endereco;
use App\Models\Telefone;
use App\Http\Requests\StoreUpdateVendedor;
use App\Http\Requests\StoreVendedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Vendedor $vendedor)
    {
        $this->repository = $vendedor;
        $this->middleware('auth');
    }

    public function index()
    {
        $vendedor = $this->repository
                        ->select(
                            'vendedores.id',
                            'users.name',
                            'users.email',
                            'users.document',
                            'users.created_at'
                        )
                        ->join('users', 'users.id', 'vendedores.user_id')
                        ->latest('vendedores.created_at')
                        ->get();

        return view('admin.vendedor.index', [
            'vendedores' => $vendedor,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vendedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendedor $request)
    {
        $request['password']= Hash::make('alterar123');
        $request['type']= User::TYPE['VENDEDOR'];

        $user = User::create($request->all());
        
        $endereco = Endereco::updateOrCreate(
            [
                'zipCode' => $request['zipCode'], 
                'street' => $request['street'],
                'number' => $request['number'],
                'complement' => $request['complement'],
                'neighborhood' => $request['neighborhood'],
                'city' => $request['city'],
                'state' => $request['state'],
                'user_id' => $user->id
            ],
        );

        $this->repository->create(['user_id' => $user->id]);

        return redirect()->route('vendedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendedor = $this->repository
                        ->select(
                            'vendedores.id',
                            'users.name',
                            'users.email',
                            'users.document',
                            'enderecos.zipCode',
                            'enderecos.street',
                            'enderecos.number',
                            'enderecos.complement',
                            'enderecos.neighborhood',
                            'enderecos.city',
                            'enderecos.state',
                            'telefones.telefone'
                        )
                        ->join('users', 'users.id', 'vendedores.user_id')
                        ->join('enderecos', 'enderecos.user_id', 'users.id')
                        ->join('telefones', 'telefones.user_id', 'users.id')
                        ->where('vendedores.id', $id)
                        ->first();

        if (!$vendedor)
            return redirect()->back();

        return view('admin.vendedor.show', [
            'vendedor' => $vendedor
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
        $vendedor = $this->repository
                        ->select(
                            'vendedores.id',
                            'users.name',
                            'users.email',
                            'users.document',
                            'enderecos.zipCode',
                            'enderecos.street',
                            'enderecos.number',
                            'enderecos.complement',
                            'enderecos.neighborhood',
                            'enderecos.city',
                            'enderecos.state',
                            'telefones.telefone'
                        )
                        ->join('users', 'users.id', 'vendedores.user_id')
                        ->leftJoin('enderecos', 'enderecos.user_id', 'users.id')
                        ->leftJoin('telefones', 'telefones.user_id', 'users.id')
                        ->where('vendedores.id', $id)
                        ->first();

        if (!$vendedor)
            return redirect()->back();

        return view('admin.vendedor.edit', compact('vendedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateVendedor $request, $id)
    {
        $data = $request->all();
        $vendedor = $this->repository->where('id', $id)->first();

        if (!$vendedor)
            return redirect()->back();

        $user = User::where('id', $vendedor->user_id)
            ->update(['name' => $data['name'], 'document' => $data['document'], 'email' => $data['email']]);
        
  
        $endereco = Endereco::updateOrCreate(
            [
                'zipCode' => $data['zipCode'], 
                'street' => $data['street'],
                'number' => $data['number'],
                'complement' => $data['complement'],
                'neighborhood' => $data['neighborhood'],
                'city' => $data['city'],
                'state' => $data['state'],
                'user_id' => $vendedor->user_id
            ],
        )->where('user_id', $vendedor->user_id);

        $telefone = Telefone::updateOrCreate(
            [
                'telefone' => $data['telefone'], 
                'user_id' => $vendedor->user_id
            ],
        )->where('user_id', $vendedor->user_id);

        return redirect()->route('vendedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletar(Request $request)
    {
        $vendedor = $this->repository
                        ->where('id', $request->id)
                        ->first();

        if (!$vendedor)
            return redirect()->back();

        User::where('id', $vendedor->user_id)->delete();
        $vendedor->delete();

        return 1;
    }
}
