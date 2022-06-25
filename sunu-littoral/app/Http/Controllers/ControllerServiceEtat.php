<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerServiceEtat extends Controller
{
    public function page_service_etat(){
        return view('jeSuisDuServiceDeLetat');
    }
}
