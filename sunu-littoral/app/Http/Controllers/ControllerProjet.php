<?php

namespace App\Http\Controllers;

use App\Models\Appeldoffre;
use App\Models\Fichier;
use App\Models\Projet;
use App\Models\TypeFichier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerProjet extends Controller
{
    public function appelOffre()
    {
        // return view('site.projet.appelOffre');
        $appoffre = Appeldoffre::all();
        $nb_fichiers = count($appoffre);
        $nb_offre = 0;
        $url_appOffre = array();
        $dateDeb = array();
        $dateFin = array();
        $libelle = array();
        for ($i = 0; $i < $nb_fichiers; $i++) {
            $dateDeb[] = $appoffre[$i]->dateDebut;
            $dateFin[] = $appoffre[$i]->dateFin;
            $libelle[] = $appoffre[$i]->libelle;
            $fichier = $appoffre[$i]->fichier;
            $url_appOffre[] = Storage::url($fichier);
            //echo $url_appOffre[$i];
            $nb_offre++;
        }




        return view('site.projet.appelOffre', ['url_appOffre' => $url_appOffre, 'dateDeb' => $dateDeb, 'dateFin' => $dateFin, 'libelle' => $libelle, 'nb_offre' => $nb_offre]);
    }



    public function projet()
    {
        // return view('site.projet.projet');

        // return view('site.projet.appelOffre');
        $projet = Projet::all();
        $nb_fichiers = count($projet);
        $nb_projet = 0;
        $url_projet = array();
        $nom = array();
        for ($i = 0; $i < $nb_fichiers; $i++) {

            $nom[] = $projet[$i]->nom;
            $fichier = $projet[$i]->fichir;
            $url_projet[] = Storage::url($fichier);
            //echo $url_projet[$i];
            $nb_projet++;
        }




        return view('site.projet.projet', ['url_projet' => $url_projet, 'nom' => $nom, 'nb_offre' => $nb_projet]);
    }


    public function downloadProjet($i)
    {
        $projet = Projet::all();
        $fichier = $projet[$i]->fichier;
        return Storage::download($fichier);
    }
}
