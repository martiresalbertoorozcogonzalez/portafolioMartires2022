<?php

namespace App\Http\Controllers;

use App\Models\Acercademi;
use App\Models\Certificaciones;
use App\Models\Portafolio;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
       
       $portafolio = Portafolio::all();
       $acercademi = Acercademi::all(); 
       $certificaciones = Certificaciones::all();

       return view('Front.welcome')->with('acercademi' , $acercademi)
                             ->with('certificaciones', $certificaciones)
                             ->with('portafolio', $portafolio);
    }


    public function show($id)
    {
        $certificaciones = Certificaciones::where('id',$id)->first();

        // dd($certificaciones);

        return view('Front.ver.certificaciones', compact('certificaciones'));
    }
}
