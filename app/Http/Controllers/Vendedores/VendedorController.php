<?php

namespace App\Http\Controllers\Vendedores;

use App\Http\Controllers\Controller;
use App\Models\Vendedor;
use App\Models\User;
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
                            'users.document'
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
                            'users.document'
                        )
                        ->join('users', 'users.id', 'vendedores.user_id')
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
                            'users.document'
                        )
                        ->join('users', 'users.id', 'vendedores.user_id')
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

        $vendedor->delete();

        return 1;
    }
}
