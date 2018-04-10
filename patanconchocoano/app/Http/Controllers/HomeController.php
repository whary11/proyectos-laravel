<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;   

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
        $productos = producto::paginate(5);
        $total = count(producto::all());
        // dd($total);
        return view('home', [
            'productos' => $productos,
            'total' => $total
        ]);
    }
}
