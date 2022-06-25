<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPopulationEnvironnant extends Controller
{
    public function page_pop_env(){
        return view('jeSuisDeLapopulationEnvironnant');
    }
}
