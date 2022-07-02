<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerProjet extends Controller
{
    public function projet()
    {
        // $users = DB::table('users')->get();

        //return view('site.projet', ['user' => $users]);
        $projets = DB::table('projets')->get();
        return view('site.projet', ['projet' => $projets]);
    }
}
