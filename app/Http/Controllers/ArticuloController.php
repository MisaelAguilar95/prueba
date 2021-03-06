<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class ArticuloController extends Controller
{
     public function __construct(){
         $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Cita::all();
        return view('articulo.index')->with('articulos',$articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $articulos = new Cita();

        $articulos->doctor = $request->get('doctor');
        $articulos->sucursal = $request->get('sucursal');
        $articulos->departamento = $request->get('departamento');
        $articulos->tipo_servicio = $request->get('tipo_servicio');
        $articulos->fecha = $request->get('fecha');

        $articulos->save();

        return redirect('/citas');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Cita::find($id);
        return view('articulo.edit')->with('articulo',$articulo);
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
        $articulo = Cita::find($id);

        //$articulo->doctor = $request->get('doctor');
        $articulo->sucursal = $request->get('sucursal');
        $articulo->departamento = $request->get('departamento');
        $articulo->tipo_servicio = $request->get('tipo_servicio');
        $articulo->fecha = $request->get('fecha');

        $articulo->save();

        return redirect('/citas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Cita::find($id);
        $articulo->delete();
        return redirect('/citas');
    }
}
