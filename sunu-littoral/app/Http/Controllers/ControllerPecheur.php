<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ControllerPecheur extends Controller
{
    public function page_pecheur(){
        $users_model = new User;
        $users = $users_model->actualites()->find(1);
        dd($users);
        return view('jeSuisPecheur');
    }
}
