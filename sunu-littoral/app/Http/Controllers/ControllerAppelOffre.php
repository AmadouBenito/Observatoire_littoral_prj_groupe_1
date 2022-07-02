<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAppelOffre extends Controller
{
    public function appelOffre()
    {
        return view('site.appelOffre');
    }
}
