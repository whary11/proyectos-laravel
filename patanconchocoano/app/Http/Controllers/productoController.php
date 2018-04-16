<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\requestCrearProducto;
use App\producto;

class productoController extends Controller
{

	public function ver($id){
		$producto = producto::find($id);

		return view('productos.editar', [
			'producto' => $producto,
		]);
	}
	public function editar(Request $request){
		producto::where('id', $request->input('id'))->update([
			'nombre' => $request->input('producto'),
			'descripcion' => $request->input('desproduct'),
		]);

		return response()->json(['estado' => true]);
	}


	public function delete($id){
		$producto = producto::find($id);
		// dd($producto);
		$producto->delete();

		return redirect('home');
		// return $id;
	}

	public function guardar(requestCrearProducto $request){
		// dd($request->input('producto'));

		// dd($request->user()->id);
		$producto = producto::create([
			'user_id' => $request->user()->id,
			'nombre' => $request->input('producto'),
			'descripcion' => $request->input('desproduct'),
		]);
		return response()->json(['estado' => true]);
	}

	public function crear(){
		return view('productos/crear');
	}
}
