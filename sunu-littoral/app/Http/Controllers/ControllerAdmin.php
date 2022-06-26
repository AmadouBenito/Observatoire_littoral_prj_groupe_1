<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
class ControllerAdmin extends Controller
{
    public function page_admin(){
        $userModel = new User;

        $actu = $userModel->find(1)->actualites;
        dd($actu);
        return view('jeSuisAdmin');
    }
}
