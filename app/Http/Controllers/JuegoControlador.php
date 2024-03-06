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
    public function update(Request $request, JuegoModelo $juegos)
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
        $juegos->Nombre_Juego = $request->Nombre_Juego;
        $juegos->Desarrollador = $request->Desarrollador;
        $juegos->Categoria = $request->Categoria;
        $juegos->Descripcion = $request->Descripcion;
        $juegos->Precio = $request->Precio;
        $juegos->Fecha_Lanzamiento = $request->Fecha_Lanzamiento;
        $juegos->Requisitos = $request->Requisitos;
        $juegos->save();

        return redirect()->route('juegos.show',$juegos);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JuegoModelo $juegos)
    {
        $juegos->delete();
        return redirect()->route('juegos.index',$juegos);
    }
}
