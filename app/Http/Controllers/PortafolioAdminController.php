<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioAdminController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }


    public function index()
    {
        return view('admin.index');
    }
}
