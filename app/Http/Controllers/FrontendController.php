<?php

namespace App\Http\Controllers;

use App\Models\Acercademi;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
       
       $acercademi = Acercademi::all(); 
       return view('welcome')->with('acercademi' , $acercademi);
    }
}
