<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Habilidad;
use App\Models\Portafolio;
use App\Models\Certificado;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('portafolio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Categoria $categoria )
    {
        $categorias = Categoria::all();
        $habilidades = Habilidad::all();
        $certificados = Certificado::all();

        return view('portafolio.create')
             ->with('categorias', $categorias)
             ->with('habilidades', $habilidades)
             ->with('certificados', $certificados);
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
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portafolio $portafolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portafolio $portafolio)
    {
        return view('portafolio.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portafolio $portafolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portafolio $portafolio)
    {
        //
    }
}
