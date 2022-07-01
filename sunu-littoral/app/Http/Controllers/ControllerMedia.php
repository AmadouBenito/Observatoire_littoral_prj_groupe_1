<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerMedia extends Controller
{
    public function videos()
    {    $el1 = Storage::url('Sénégal _ le littoral en proie à la prédation foncière.mp4');
        //$videos = Fichier::where('type-fichier_id','video')->get();
        $videos = ['el','marie','babs','hf','hy','fr','rfd','fred'];
        return view('site.media.video',['videos' => $videos,'el1' => $el1]);
    }

    public function images(){
        $el = Storage::url('images1.jpeg');
        //dd($el);
        //$images = Fichier::where('type-fichier_id','image')->get();
        $images = ['el','marie','babs','hf','hy','fr','rfd','fred'];
        return view('site.media.image',['images' => $images,'el' => $el]);
    }

    public function audios(){
        $el3 = Storage::url('on_lyrical.mp3');
        //$audios = Fichier::where('type-fichier_id','audio')->get();
        $audios = ['el','marie','babs','hf','hy','fr','rfd','fred'];
        return view('site.media.audio',['audios' => $audios,'el3' => $el3]);
    }
}
