<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerScientifique extends Controller
{
    public function page_scientifique(){
        return view('jeSuisScientifique');
    }
}
