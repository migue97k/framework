<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categorias');
    }

    public function showAlimentosybebidas()
    {
        return view('categorias.alimentosybebidas');
    }

    public function showBebes()
    {
        return view('categorias.bebes');
    }
    
      public function showCelularesytelefonia()
    {
        return view('categorias.celularesytelefonia');
    }


     public function showComputacion()
    {
        return view('categorias.computacion');
    }

     public function showConsolasyvideojuegos()
    {
        return view('categorias.consolasyvideojuegos');
    }

 public function showElectrodomestico()
    {
        return view('categorias.electrodomestico');
    }

     public function showHogarmueblesjardin()
    {
        return view('categorias.hogarmueblesjardin');
    }

     public function showJuegosyjuguetes()
    {
        return view('categorias.juegosyjuguetes');
    }

     public function showRopabolsascalzado()
    {
        return view('categorias.ropabolsascalzado');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
