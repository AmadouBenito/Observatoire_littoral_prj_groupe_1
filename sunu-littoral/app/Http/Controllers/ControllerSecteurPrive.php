<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSecteurPrive extends Controller
{
    public function page_secteur_prive(){
        return view('jeSuisDuSecteurPrive');
    }
}
