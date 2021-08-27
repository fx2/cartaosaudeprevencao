<?php

namespace App\Http\Controllers;
namespace App\Models\PlanosSaude;

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
        // $planosSaude = PlanosSaude::whereRaw("COUNT(id)")
        return view('home');
    }

    public function test() {
        return json_encode('pei');
    }
}
