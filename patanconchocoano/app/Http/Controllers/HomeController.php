<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\User;   


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user_id = \Auth::id();
        $usuario = User::where('id', \Auth::id())->first();
        $productos = $usuario->productos()->paginate();
        // dd($productos);
        return view('home', [
            'productos' => $productos,
            'usuario' => $usuario
        ]);
    }
}
