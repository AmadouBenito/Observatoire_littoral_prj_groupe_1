<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;
use App\Models\Appeldoffre;
use App\Models\Fichier;
use Illuminate\Support\Facades\Storage;

class ActualiteController extends Controller
{
    public function index()
    {
        $actualites = Actualite::all();
        $appelDoffres = Appeldoffre::all();
        $fichiers = Fichier::all();
        return view('site.accueil',
               compact('actualites', 'appelDoffres', 'fichiers'));

    }

}
