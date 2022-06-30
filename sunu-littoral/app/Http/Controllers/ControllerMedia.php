<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use Illuminate\Http\Request;

class ControllerMedia extends Controller
{
    public function videos()
    {
        //$videos = Fichier::where('type-fichier_id','video')->get();
        $videos = ['el','marie','babs','hf','hy','fr','rfd','fred'];
        return view('site.media.video',['videos' => $videos]);
    }

    public function images(){
        //$images = Fichier::where('type-fichier_id','image')->get();
        $images = ['el','marie','babs','hf','hy','fr','rfd','fred'];
        return view('site.media.image',['images' => $images]);
    }

    public function audios(){
        $audios = Fichier::where('type-fichier_id','audio')->get();
        $audios = ['el','marie','babs','hf','hy','fr','rfd','fred'];
        return view('site.media.audio',['audios' => $audios]);
    }
}
