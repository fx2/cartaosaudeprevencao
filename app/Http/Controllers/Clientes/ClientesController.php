<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Models\Vendedor;
use App\Models\User;
use App\Http\Requests\StoreUpdateCliente;
use App\Http\Requests\StoreVendedor;
use App\Models\Endereco;
use App\Models\Telefone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(User $cliente)
    {
        $this->repository = $cliente;
        $this->middleware('auth');
    }

    public function index()
    {
        $cliente = $this->repository
                        ->select(
                            'users.id',
                            'users.name',
                            'users.email',
                            'users.document',
                            'users.created_at'
                        )
                        ->latest('users.created_at')
                        ->where('type', 'cliente')
                        ->get();

        return view('admin.cliente.index', [
            'clientes' => $cliente,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.vendedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendedor $request)
    {
        // $request['password']= Hash::make('alterar123');
        // $request['type']= User::TYPE['VENDEDOR'];

        // $user = User::create($request->all());

        // $this->repository->create(['user_id' => $user->id]);

        // return redirect()->route('vendedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = $this->repository
                        ->select(
                            'users.id',
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
                        ->join('enderecos', 'enderecos.user_id', 'users.id')
                        ->join('telefones', 'telefones.user_id', 'users.id')
                        ->where('users.id', $id)
                        ->first();

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
        $cliente = $this->repository
                        ->select(
                            'users.id',
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
                            'telefones.telefone',
                            'telefones.id as idtelefone',
                            'enderecos.id as idendereco'
                        )
                        ->leftJoin('enderecos', 'enderecos.user_id', 'users.id')
                        ->leftJoin('telefones', 'telefones.user_id', 'users.id')
                        ->where('users.id', $id)
                        ->first();

        if (!$cliente)
            return redirect()->back();

        return view('admin.cliente.edit', compact('cliente'));
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
        $data = $request->all();
        $cliente = $this->repository->where('id', $id)->first();

        if (!$cliente)
            return redirect()->back();

        // dd($data);
        $user = User::where('id', $id)
            ->update([
                'name' => $data['name'], 
                'document' => $data['document'], 
                'email' => $data['email'], 
                'password' =>Hash::make($data['password'])
            ]);
            
        $endereco = Endereco::updateOrCreate(
            ['id' => $data['idendereco']],
            [
                'zipCode' => $data['zipCode'], 
                'street' => $data['street'],
                'number' => $data['number'],
                'complement' => $data['complement'],
                'neighborhood' => $data['neighborhood'],
                'city' => $data['city'],
                'state' => $data['state'],
                'user_id' => $id
            ],
        )->where('user_id', $id);

        $telefone = Telefone::updateOrCreate(
            ['id' => $data['idtelefone']],
            [
                'telefone' => $data['telefone'], 
                'user_id' => $id
            ],
        )->where('user_id', $id);

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletar(Request $request)
    {
        $cliente = $this->repository
                        ->where('id', $request->id)
                        ->first();

        if (!$cliente)
            return redirect()->back();

        $cliente->delete();

        return 1;
    }
}
