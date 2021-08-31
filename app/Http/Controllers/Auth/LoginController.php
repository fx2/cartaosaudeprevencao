<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $use = $input['email'];
          
        $user = User::select(
            'users.id',
            'users.password',
            'users.email',
            'type'
        )
        ->where(function($query) use ($use){
            $query->where('users.email', $use);
        })
        ->first();

        if (!isset($user->type)) {  
            return redirect('login')->with('status', 'Sem autorização para acessar o sistema');    
        }

        if($user)
        {
            $eita = Hash::check($input['password'], $user->password);
            if ($eita) {
                Auth::login($user);
                return redirect()->route('home');
            } else {
                return redirect('login')->with('status', 'Senha incorreta');    
            }
        }else{
            return redirect('login')->with('status', 'Usuário incorreto');    
        }
    }
}
