<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;
use App\Models\Appeldoffre;
use App\Models\Category;
use App\Models\Fichier;
use Illuminate\Support\Facades\Storage;

class ActualiteController extends Controller
{
    public function index()
    {
        $actualites = Actualite::all()->sortDesc()->take(4);
        $actualitesLast = Actualite::all()->last();
        $categories = Category::all()->take(4);
        $appelDoffres = Appeldoffre::all();
        $fichiers = Fichier::all()->take(4);
        $images = Fichier::all()->where('pub_yes_no', 1);
        //dd($images[4]->type_fichier->libelle);
        return view('site.accueil',
               compact('actualites','actualitesLast', 'appelDoffres', 'fichiers', 'categories', 'images'));
    }

}
