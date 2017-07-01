<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoFormRequest;
use App\Http\Controllers\Controller;
use App\Producto as Producto;

class ProductoController extends Controller
{
  public function index()
  {
    $productos = Producto::where('estado', '=', 'A')->paginate(7);
    return \View::make('almacen/productos/index', compact('productos'));
  }

  public function create()
  {
  	return \View::make('almacen/productos/create');
  }

  public function store(ProductoFormRequest $request)
   {
     $producto = new Producto;
     $producto->codigo = $request->codigo;
     $producto->nombre = $request->nombre;
     $producto->stock = $request->stock;
     $producto->descripcion = $request->descripcion;
     $producto->estado = $request->estado;
     $producto->save();
     return redirect('almacen/productos');
   }

   public function edit($id)
   {
     $producto = Producto::find($id);
     return \View::make('almacen/productos/update', compact('producto'));
   }

   public function update(ProductoFormRequest $request)
    {
    	$producto = Producto::find($request->id);
    	$producto->codigo = $request->codigo;
    	$producto->nombre = $request->nombre;
      $producto->stock = $request->stock;
      $producto->descripcion = $request->descripcion;
      $producto->estado = $request->estado;
    	$producto->update();
    	return redirect('almacen/productos');
    }

    public function show($id)
    {
        return \View::make('almacen.productos.show', ["producto" => Producto::find($id)]);
    }

    public function destroy($id)
    {
    	$producto = Producto::find($id);
    	$producto->delete();
    	return redirect()->back();
    }

    public function search(Request $request)
    {
    	$productos = Producto::where('nombre', 'like', '%'.$request->name.'%')->paginate(7);
    	return \View::make('almacen/productos/index', compact('productos'));
    }
}
