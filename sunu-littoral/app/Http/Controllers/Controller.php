<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use Filament\Facades\Filament;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function publier_fichier($id_fichier)
    {
        $fichier = Fichier::find($id_fichier);
        $fichier->pub_yes_no = '1';
        $fichier->save();
        Filament::notify('success', 'Publication avec succès');
        return back();
    }

    public function no_publier_fichier($id_fichier)
    {
        $fichier = Fichier::find($id_fichier);
        $fichier->pub_yes_no = '0';
        $fichier->save();
        Filament::notify('success', 'Publication annulée avec succès');
        return back();
    }
}
