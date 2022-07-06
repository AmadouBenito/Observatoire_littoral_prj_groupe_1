<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ControllerPecheur;
use App\Http\Controllers\ControllerPopulationEnvironnant;
use App\Http\Controllers\ControllerOng;
use App\Http\Controllers\ControllerProjet;
use App\Http\Controllers\ControllerScientifique;
use App\Http\Controllers\ControllerSecteurPrive;
use App\Http\Controllers\ControllerServiceEtat;
use App\Http\Controllers\ControllerMedia;
use App\Models\Fichier;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
});

/* Cette route est pour tester l'intégration de
la page d'accueil du site (Front office) */
Route::get('/',[ActualiteController::class, 'index'])->name('actualite');
Route::view('/actualite', 'site.actualite');//vue actualite

//Page Proge et Appel d'offre
Route::get('/projet', [ControllerProjet::class, 'projet'])->name('accueil.projet');
Route::get('/appelOffre', [ControllerProjet::class, 'appelOffre'])->name('accueil.appelOffre');
Route::get('/postuler/{fichier},{appelOffre_id}', [ControllerProjet::class, 'postuler'])->name('appelOffre.postuler');
Route::get('/projet/telecharger{id}', [ControllerProjet::class, 'telecharger_projet'])->name('projet.telecharger');


require __DIR__ . '/auth.php';

Route::get('/lesimages', [ControllerMedia::class, 'images'])->name('accueil.image');
Route::get('/appelOffre', [ControllerProjet::class, 'appelOffre'])->name('accueil.appelOffre');
Route::get('/projet', [ControllerProjet::class, 'projet'])->name('accueil.projet');
Route::get('/projet/telecharger{id}', [ControllerProjet::class, 'telecharger_projet'])->name('projet.telecharger');
Route::get('/lesvideos', [ControllerMedia::class, 'videos'])->name('accueil.video');
Route::get('/lesaudios', [ControllerMedia::class, 'audios'])->name('accueil.audio');

Route::middleware('auth')->group(function () { //il faut s'authentifier pour acceder a ces routes
    Route::get('/pecheur', [ControllerPecheur::class, 'page_pecheur']);
    Route::get('/scientifique', [ControllerScientifique::class, 'page_scientifique']);
    Route::get('/populationenvironnant', [ControllerPopulationEnvironnant::class, 'page_pop_env']);
    Route::get('/Interesse/{id_projet}', [ControllerProjet::class, 'sIntéréssée'])->name('projet.sIntéréssée');
    Route::get('/ong', [ControllerOng::class, 'page_ong']);
    Route::get('/serviceetat', [ControllerServiceEtat::class, 'page_service_etat']);
    Route::get('/secteurprive', [ControllerSecteurPrive::class, 'page_secteur_prive']);
    Route::get('publier/{record}', [Controller::class, 'publier_fichier'])->name('partager_fichier');
    Route::get('no_publier/{record}', [Controller::class, 'no_publier_fichier'])->name('no_partager_fichier');
    Route::get('/Interesse/{id_projet}', [ControllerProjet::class, 'sIntéréssée'])->name('projet.sIntéréssée');
    Route::get('/postuler/{fichier},{appelOffre_id}', [ControllerProjet::class, 'postuler'])->name('appelOffre.postuler');
});



/**commentaire de Marie */
