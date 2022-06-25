<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{
    public function page_admin(){
        return view('jeSuisAdmin');
    }
}
