<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\requestCrearProducto;
use App\producto;

class productoController extends Controller
{
	public function delete($id){
		dd($id);
		return $id;
	}

	public function guardar(requestCrearProducto $request){
		// dd($request->input('producto'));

		// dd($request->user()->id);
		$producto = producto::create([
			'user_id' => $request->user()->id,
			'nombre' => $request->input('producto'),
			'descripcion' => $request->input('desproduct'),
		]);

		dd($errors);
		// if ($producto->id) {
		// 	dd([$producto]);
		// }else{
		// 	dd(['No se pudo Guardar el producto']);
		// }
		// return response()->json($producto);
	}
}
