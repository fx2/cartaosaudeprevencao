<?php

namespace App\Http\Controllers\AlterarCadastro;

use App\Http\Controllers\Controller;
use App\Models\Vendedor;
use App\Models\User;
use App\Http\Requests\AlterarCadastro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AlterarCadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(User $user)
    {
        $this->repository = $user;
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->repository
                        ->select(
                            'users.id',
                            'users.name',
                            'users.email',
                            'users.document'
                        )
                        ->where('users.id', $id)
                        ->first();

        if (!$user)
            return redirect()->back();

        return view('admin.alterarcadastro.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlterarCadastro $request, $id)
    {
        $data = $request->all();

        $user = User::findOrFail($id);
        if(!$user)
            return redirect()->back();

        $user->update(['name' => $data['name'], 'document' => $data['document'], 'email' => $data['email'], 'password' => Hash::make($data['password'])]);

        return redirect()->route('home');
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
