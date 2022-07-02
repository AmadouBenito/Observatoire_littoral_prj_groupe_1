<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ControllerOng extends Controller
{
    public function page_ong(){


      /*   $postulants = Projet::find(3)->postulants()->get();
        dd($postulants); */
        return view('jeSuisOng');
    }
}
