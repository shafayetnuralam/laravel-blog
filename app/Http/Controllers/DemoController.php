<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    
    function MyName($firstName,$middeName,$lastName){

        return view('DemoView',['firstName'=>$firstName,'middeName'=>$middeName,'lastName'=>$lastName]);
        
    }
}
