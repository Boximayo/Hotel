<?php

namespace App\Http\Controllers;
use App\Models\Habitaciones;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitaciones = Habitaciones::all();
        return \response($habitaciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'personas' => 'required',
            'estado' => 'required'
        ]);

        $habitaciones = Habitaciones::create($request->all());
        return \response ($habitaciones);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $habitaciones = Habitaciones::findOrFail($id);
        return \response($habitaciones);
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
        Habitaciones::findOrFail($id)
            ->update($request->all());
        return \response ("Habitacion actualizada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Habitaciones::destroy($id);
        return \response ("La tarea con id: ${id} ha sido eliminada");
    }
}
