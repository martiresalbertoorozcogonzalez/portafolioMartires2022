<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Habilidad;
use App\Models\Portafolio;
use App\Models\Certificado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Portafolio $portafolio)
    {
        
        $portafolios = Portafolio::all();
        
        return view('portafolio.index')->with('portafolios', $portafolios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Categoria $categoria )
    {
        $categorias = Categoria::all();
        // $habilidades = Habilidad::all();
        // $certificados = Certificado::all();

        return view('portafolio.create')
             ->with('categorias', $categorias);
            //  ->with('habilidades', $habilidades)
            //  ->with('certificados', $certificados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
           // return $request->all();

       //validacion
       $data = request()->validate([
           'titulo' => 'required|min:6',
           'categoria_id' => 'required',
           'descripcion' => 'required',
           'imagen_portafolio' => 'required|image',
       ]);
    

    //  Obtener la ruta de la imagen
     $ruta_imagen = $request['imagen_portafolio']->store('portafolio','public');

    //  Resize de la imagen
     $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1220,550);
     $img->save();

             //Almacenar en la DB con modelo
    auth()->user()->portafolio()->create([
        'titulo' => $data['titulo'] ,
        'categoria_id' => $data['categoria_id'],
        'descripcion' => $data['descripcion'],
        'imagen_portafolio' => $ruta_imagen,
    ]);


    return redirect()->route('portafolio.home')->with('estado','El portafolio a sido creado');

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

        $this->authorize('view', $portafolio);

        $categorias = Categoria::all();

        return view('portafolio.edit', compact('portafolio','categorias'));

       
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

        $this->authorize('update', $portafolio);

        //validacion
        $data = request()->validate([
            'titulo' => 'required|min:6',
            'categoria_id' => 'required',
            'descripcion' => 'required',
        ]);
        
        // Guardando los datos del formulario en la base de datos
        $portafolio->titulo = $data['titulo'];
        $portafolio->categoria_id = $data['categoria_id'];
        $portafolio->descripcion = $data['descripcion'];
        
        // Si el usuario sube un anueva imagen de portafolio
           if (request('imagen_portafolio')) {

            //Obtener la ruta de la imagen
            $ruta_imagen = $request['imagen_portafolio']->store('upload-recetas','public');
    
            //Resize de la imagen
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(1220,550);
    
            $img->save();
    
            //Asiganr al objeto
            $portafolio->imagen_portafolio = $ruta_imagen;
        }

        $portafolio->save();

        //redireccionar
        return redirect()->route('portafolio.home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portafolio  $portafolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portafolio $portafolio)
    {
        $this->authorize('delete', $portafolio);

        $portafolio->delete();

        return redirect()->route('portafolio.home');

    }
}
