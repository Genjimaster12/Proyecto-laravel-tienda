<?php

namespace App\Http\Controllers;

use App\Models\ReviewModelo;
use Illuminate\Http\Request;

class ReviewControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reviews = ReviewModelo::all();
        return view('review.reviewIndex', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('review.reviewsCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        $request->validate([
            'Nombre_usuario' => 'required|string',
            'Nombre_Juego' => 'required|string',
            'Puntuacion' => 'required|integer',
            'Comentario' => 'required|string',
        ]);
        $review = new ReviewModelo();
        $review->Nombre_usuario = $request->Nombre_usuario;
        $review->Nombre_Juego = $request->Nombre_Juego;
        $review->Puntuacion = $request->Puntuacion;
        $review->Comentario = $request->Comentario;
        $review->save();

        return redirect()->route('reviews.index');
        /* review.reviewIndex*/
    }

    /**
     * Display the specified resource.
     */
    public function show(ReviewModelo $review)
    {
        //
        return view('review.reviewsShow', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReviewModelo $review)
    {
        //
        return view('review.reviewsEdit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReviewModelo $review)
    {
        //
        $request->validate([
            'Nombre_usuario' => 'required|string',
            'Nombre_Juego' => 'required|string',
            'Puntuacion' => 'required|integer',
            'Comentario' => 'required|string',
        ]);
        
        $review->Nombre_usuario = $request->Nombre_usuario;
        $review->Nombre_Juego = $request->Nombre_Juego;
        $review->Puntuacion = $request->Puntuacion;
        $review->Comentario = $request->Comentario;
        $review->save();

        return redirect()->route('reviews.index');
        /* review.reviewIndex*/
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReviewModelo $review)
    {
        //
        $review->delete();
        return redirect()->route('reviews.index');
    }
}
