<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use App\Models\TypeFichier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerMedia extends Controller
{
    public function videos()
    {
        $fichiers = Fichier::all();
        $nb_fichiers = count($fichiers);
        $nb_videos = 0;
        $url_videos = array();
        $dates = array();
        $titres = array();
        for($i=0 ; $i<$nb_fichiers ; $i++)
        {
            if ($fichiers[$i]->type_fichier->libelle == 'mp4') {
                $dates[] = $fichiers[$i]->date;
                $titres[] = $fichiers[$i]->titre;
                $url_video = $fichiers[$i]->url;
                $url_videos[] = Storage::url($url_video);
                $nb_videos++;
            }
        }

        return view('site.media.video',['url_videos' => $url_videos,'dates' => $dates,'titres' => $titres,'nb_videos' => $nb_videos]);
    }

    public function images(){
        $fichiers = Fichier::all();
        $nb_fichiers = count($fichiers);
        $nb_images = 0;
        $url_images = array();
        $dates = array();
        $titres = array();
        for($i=0 ; $i<$nb_fichiers ; $i++)
        {
            if ($fichiers[$i]->type_fichier->libelle == 'image') {
                $dates[] = $fichiers[$i]->date;
                $titres[] = $fichiers[$i]->titre;
                $url_image = $fichiers[$i]->url;
                $url_images[] = Storage::url($url_image);
                $nb_images++;
            }
        }
        return view('site.media.image',['url_images' => $url_images,'dates' => $dates,'titres' => $titres,'nb_images' => $nb_images]);
    }

    public function audios(){
        $fichiers = Fichier::all();
        $nb_fichiers = count($fichiers);
        $nb_audios = 0;
        $url_audios = array();
        $dates = array();
        $titres = array();
        for($i=0 ; $i<$nb_fichiers ; $i++)
        {
            if ($fichiers[$i]->type_fichier->libelle == 'mp3') {
                $dates[] = $fichiers[$i]->date;
                $titres[] = $fichiers[$i]->titre;
                $url_audio = $fichiers[$i]->url;
                $url_audios[] = Storage::url($url_audio);
                $nb_audios++;
            }
        }
        return view('site.media.audio',['url_audios' => $url_audios,'dates' => $dates,'titres' => $titres,'nb_audios' => $nb_audios]);
    }
}
