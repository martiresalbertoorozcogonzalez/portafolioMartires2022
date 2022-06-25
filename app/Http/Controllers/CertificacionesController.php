<?php

namespace App\Http\Controllers;

use App\Models\Certificaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use function Ramsey\Uuid\v1;

class CertificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificaciones = Certificaciones::all();
        return view('Certificaciones.index')->with('certificaciones', $certificaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Certificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Certificaciones $certificaciones)
    {
         //validacion
         $data = request()->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen_certificado' => 'required|image',
        ]);
     
 
     //  Obtener la ruta de la imagen
      $ruta_imagen = $request['imagen_certificado']->store('certificaciones','public');
 
     //  Resize de la imagen
      $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(400,400);
      $img->save();
 
    //Almacenar en la DB con modelo
    DB::table('certificaciones')->insert([
     'titulo' => $data['titulo'] ,
     'imagen_certificado' => $ruta_imagen,
     'descripcion' => $data['descripcion'],
    ]);
 
 
     return redirect()->route('certificaciones.index')->with('estado','El certificado a sido creado'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificaciones  $certificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Certificaciones $certificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificaciones  $certificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificaciones $certificaciones)
    {
        return view('Certificaciones.edit')->with('certificaciones', $certificaciones);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificaciones  $certificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificaciones $certificaciones)
    {
         //validacion
         $data = request()->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);
        
        // Guardando los datos del formulario en la base de datos
        $certificaciones->titulo = $data['titulo'];
        $certificaciones->descripcion = $data['descripcion'];
        
        // Si el usuario sube un anueva imagen de portafolio
           if (request('imagen_certificado')) {

            //Obtener la ruta de la imagen
            $ruta_imagen = $request['imagen_certificado']->store('certificaciones','public');
    
            //Resize de la imagen
            $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(300,300);
    
            $img->save();
    
            //Asiganr al objeto
            $certificaciones->imagen_certificado = $ruta_imagen;
        }

        $certificaciones->save();

        //redireccionar
        return redirect()->route('certificaciones.index')->with('estado','La Certificacion a sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificaciones  $certificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificaciones $certificaciones)
    {
        $certificaciones->delete();

        return redirect()->route('certificaciones.index');
    }
}
