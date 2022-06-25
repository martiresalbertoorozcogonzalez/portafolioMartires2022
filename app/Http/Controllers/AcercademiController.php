<?php

namespace App\Http\Controllers;

use App\Models\Acercademi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class AcercademiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $acercademi = Acercademi::all();

        return view('Acercademi.index')->with('acercademi', $acercademi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Acercademi.create');
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
       //validacion
       $data = request()->validate([
        'nombre' => 'required|min:6',
        'descripcion' => 'required',
        'imagen_acercademi' => 'required|image',
    ]);
 

 //  Obtener la ruta de la imagen
  $ruta_imagen = $request['imagen_acercademi']->store('acercademi','public');

 //  Resize de la imagen
  $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(300,300);
  $img->save();

          //Almacenar en la DB con modelo
 DB::table('acercademis')->insert([
     'nombre' => $data['nombre'] ,
     'imagen_acercademi' => $ruta_imagen,
     'descripcion' => $data['descripcion'],
 ]);


 return redirect()->route('acercademi.home')->with('estado','La informacion a sido creada');
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
    public function edit(Acercademi $acercademi)
    {
        $acercademi = Acercademi::first();

        return view('Acercademi.edit')->with('acercademi', $acercademi);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acercademi $acercademi)
    {
            //validacion
            $data = request()->validate([
                'nombre' => 'required|min:6',
                'descripcion' => 'required',
            ]);
            
            // Guardando los datos del formulario en la base de datos
            $acercademi->nombre = $data['nombre'];
            $acercademi->descripcion = $data['descripcion'];
            
            // Si el usuario sube un anueva imagen de portafolio
               if (request('imagen_acercademi')) {
    
                //Obtener la ruta de la imagen
                $ruta_imagen = $request['imagen_acercademi']->store('acercademi','public');
        
                //Resize de la imagen
                $img = Image::make(public_path("storage/{$ruta_imagen}"))->fit(300,300);
        
                $img->save();
        
                //Asiganr al objeto
                $acercademi->imagen_acercademi = $ruta_imagen;
            }
    
            $acercademi->save();
    
            //redireccionar
            return redirect()->route('acercademi.index')->with('estado','Acercademi a sido actualizado');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acercademi $acercademi)
    {

        $acercademi->delete();

        return redirect()->route('acercademi.home');
    }
}
