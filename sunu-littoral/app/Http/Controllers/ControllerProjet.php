<?php

namespace App\Http\Controllers;

use App\Models\Appeldoffre;
use App\Models\Fichier;
use App\Models\Projet;
use App\Models\TypeFichier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        $fichier = array();
        $appelOffre_id = array();
        for ($i = 0; $i < $nb_fichiers; $i++) {
            $dateDeb[] = $appoffre[$i]->dateDebut;
            $dateFin[] = $appoffre[$i]->dateFin;
            $libelle[] = $appoffre[$i]->libelle;
            $appelOffre_id[] = $appoffre[$i]->id;
            $fichir = $appoffre[$i]->fichier;
            $fichier[] = $appoffre[$i]->fichier;
            // echo $fichier;
            // echo $appelOffre_id;
            $url_appOffre[] = Storage::url($fichir);
            //echo $url_appOffre[$i];
            $nb_offre++;
        }




        return view('site.projet.appelOffre', ['url_appOffre' => $url_appOffre, 'dateDeb' => $dateDeb, 'dateFin' => $dateFin, 'libelle' => $libelle, 'nb_offre' => $nb_offre, 'appelOffre_id' => $appelOffre_id, 'fichier' => $fichier]);
    }



    public function projet()
    {
        // return view('site.projet.projet');

        // return view('site.projet.appelOffre');
        $projet = Projet::all();
        $nb_fichiers = count($projet);
        $nb_projet = 0;
        $url_projet = array();
        $id_projet = array();
        $nom = array();
        for ($i = 0; $i < $nb_fichiers; $i++) {

            $nom[] = $projet[$i]->nom;
            $id_projet[] = $projet[$i]->id;
            $fichier = $projet[$i]->fichir;
            $url_projet[] = Storage::url($fichier);
            //echo $url_projet[$i];
            $nb_projet++;
        }




        return view('site.projet.projet', ['url_projet' => $url_projet, 'nom' => $nom, 'nb_projet' => $nb_projet, 'id_projet' => $id_projet]);
    }


    public function telecharger_projet($id)
    {
        $projet = Projet::findOrFail($id);
        $fichier = $projet->fichir;
        return response()->download(public_path('storage/' . $fichier));
    }

    public function postuler($fichier, $appelOffre_id)
    {


        $user_id = Auth::user()->id;


        DB::insert('insert into postulants (fichier,user_id,appelDoffre_id) values (?, ?, ?)', [$fichier, $user_id, $appelOffre_id]);
        return Redirect('appelOffre');
    }
}
