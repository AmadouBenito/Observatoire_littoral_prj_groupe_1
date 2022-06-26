<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerDashboard extends Controller
{
    public function dashboardFuntion(){

        if(Auth::user()->role == 'Scientifique'){
            return view('jeSuisScientifique');
        }
        elseif(Auth::user()->role == 'Pecheur') {
            return view('/jeSuisPecheur');
        }
        elseif(Auth::user()->role == 'SecteurEtat') {
            return view('/jeSuisDuSecteurDeLetat');
        }
        elseif(Auth::user()->role == 'SecteurPrive') {
            return view('/jeSuisDuSecteurPrive');
        }
        elseif(Auth::user()->role == 'ONG') {
            return view('jeSuisOng');
        }
        elseif(Auth::user()->role == 'Pop_Env') {
            return view('/jeSuisDeLapopulationEnvironnant');
        }
        elseif(Auth::user()->role == 'Admin') {
            return view('jeSuisAdmin');
        }
    }
}
