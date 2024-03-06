<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JuegoModelo;

class JuegoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $juegos = JuegoModelo::all();
        return view('juego.juegosIndex', compact('juegos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('juego.juegosCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre_Juego' => 'required|string',
            'Desarrollador' => 'required|string',
            'Categoria' => 'required|string',
            'Descripcion' => 'required|string',
            'Precio' => 'required|integer',
            'Fecha_Lanzamiento' => 'required|date',
            'Requisitos' => 'required|string',
        ]);
        $juegos = new JuegoModelo();
        $juegos->Nombre_Juego = $request->Nombre_Juego;
        $juegos->Desarrollador = $request->Desarrollador;
        $juegos->Categoria = $request->Categoria;
        $juegos->Descripcion = $request->Descripcion;
        $juegos->Precio = $request->Precio;
        $juegos->Fecha_Lanzamiento = $request->Fecha_Lanzamiento;
        $juegos->Requisitos = $request->Requisitos;
        $juegos->save();

        return redirect()->route('juegos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(JuegoModelo $juego)
    {
        return view('juego.juegosShow', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JuegoModelo $juego)
    {
        return view('juego.juegosEdit', compact('juego'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JuegoModelo $juego)
    {
        $request->validate([
            'Nombre_Juego' => 'required|string',
            'Desarrollador' => 'required|string',
            'Categoria' => 'required|string',
            'Descripcion' => 'required|string',
            'Precio' => 'required|integer',
            'Fecha_Lanzamiento' => 'required|date',
            'Requisitos' => 'required|string',
        ]);
        $juego->Nombre_Juego = $request->Nombre_Juego;
        $juego->Desarrollador = $request->Desarrollador;
        $juego->Categoria = $request->Categoria;
        $juego->Descripcion = $request->Descripcion;
        $juego->Precio = $request->Precio;
        $juego->Fecha_Lanzamiento = $request->Fecha_Lanzamiento;
        $juego->Requisitos = $request->Requisitos;
        $juego->save();

        return redirect()->route('juegos.show',$juego);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JuegoModelo $juego)
    {
        $juego->delete();
        return redirect()->route('juegos.index');
    }
}
