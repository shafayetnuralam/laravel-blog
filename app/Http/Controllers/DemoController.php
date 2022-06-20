<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    
    function MyName($firstName,$middeName,$lastName){

        return "First Name : " .$firstName . " Middle Name: ".$middeName . " Last Name: ".$lastName;
        
    }
}
