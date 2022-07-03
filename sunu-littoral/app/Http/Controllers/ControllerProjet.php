<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use App\Models\TypeFichier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerProjet extends Controller
{
    public function appelOffre()
    {
        return view('site.projet.appelOffre');
    }


    public function projet()
    {
        return view('site.projet.projet');
    }
}
