<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class funController extends Controller
{
    public function menuCal(){
        return view('menu');
    }

    public function operaciones($ope){
        if($ope == "suma"){
            return view('suma');
        }else if($ope == "multi"){
            return view('multi');
        }else if($ope == "expo"){
            return view('expo');
        }else if($ope == "salida"){
            return view('salida');
        }
    }
}
