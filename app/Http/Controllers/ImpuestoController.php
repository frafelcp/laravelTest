<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImpuestoFormRequest;
use App\Http\Controllers\Controller;
use App\Impuesto as Impuesto;

class ImpuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $impuestos = Impuesto::paginate(7);
    	return \View::make('configuracion/impuestos/index', compact('impuestos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('configuracion/impuestos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImpuestoFormRequest $request)
    {
        $impuesto = new Impuesto;
    	$impuesto->create($request->all());
    	return redirect('configuracion/impuestos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return \View::make('configuracion.impuestos.show', ["impuesto" => Impuesto::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $impuesto = Impuesto::find($id);
    	return \View::make('configuracion/impuestos/update', compact('impuesto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $impuesto = Impuesto::find($request->id);
    	$impuesto->porcentaje = $request->nombre;
    	$impuesto->descripcion = $request->descripcion;
    	$impuesto->estado = $request->estado;
    	$impuesto->update();
    	return redirect('configuracion/impuestos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $impuesto = Impuesto::find($id);
    	$impuesto->delete();
    	return redirect()->back();
    }

    public function search(Request $request)
    {
        $impuestos = Impuesto::where('descripcion', 'like', '%'.$request->name.'%')->get();
    	return \View::make('configuracion/impuestos/index', compact('impuestos'));
    }
}
