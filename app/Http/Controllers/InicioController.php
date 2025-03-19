<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view("inicio"); 
    }
    public function home(){
        return view("home"); 
    }

    public function vista2(){
        return view('vista2'); 
        
    }

    public function vista3(){
        return view('vista3'); 
        
    }

    public function vista4(){
        return view('vista4'); 
        
    }

}
