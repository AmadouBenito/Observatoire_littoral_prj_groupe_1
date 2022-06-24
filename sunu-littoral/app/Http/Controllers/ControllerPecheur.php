<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPecheur extends Controller
{
    public function page_pecheur(){
        return view('jeSuisPecheur');
    }
}
