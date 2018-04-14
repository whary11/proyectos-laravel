<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productoController extends Controller
{
	public function delete($id){
		dd($id);
		return $id;
	}
}
