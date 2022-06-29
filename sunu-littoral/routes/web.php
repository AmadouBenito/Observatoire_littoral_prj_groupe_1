<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerPecheur;
use App\Http\Controllers\ControllerPopulationEnvironnant;
use App\Http\Controllers\ControllerOng;
use App\Http\Controllers\ControllerScientifique;
use App\Http\Controllers\ControllerSecteurPrive;
use App\Http\Controllers\ControllerServiceEtat;


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

Route::get('/', function () {
    //return view('accueil');
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/besoin', function () {
    return view('besoin');
});

/* Cette route est pour tester l'intégration de
la page d'accueil du site (Front office) */
Route::view('/accueil', 'site.accueil');


require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function(){ //il faut s'authentifier pour acceder a ces routes
    Route::get('/pecheur',[ControllerPecheur::class,'page_pecheur']);
    Route::get('/scientifique',[ControllerScientifique::class,'page_scientifique']);
    Route::get('/populationenvironnant',[ControllerPopulationEnvironnant::class,'page_pop_env']);
    Route::get('/ong',[ControllerOng::class,'page_ong']);
    Route::get('/serviceetat',[ControllerServiceEtat::class,'page_service_etat']);
    Route::get('/secteurprive',[ControllerSecteurPrive::class,'page_secteur_prive']);
});

Route::middleware('pecheur_midd_cle')->group(function(){ //acces autoriser pour les pecheurs
    Route::get('/pecheur/consulterMeteo',[]);
    Route::get('/pecheur/stocker',[]);
    Route::get('/pecheur/partager',[]);
    Route::get('/pecheur/rechercher',[]);
    Route::get('/pecheur/diffuser',[]);
    Route::get('/pecheur/zoneArisque',[]);
});


Route::middleware('scientifique_midd_cle')->group(function(){ //acces autoriser pour les scientifique
    Route::get('/scientifique/consulterMeteo',[]);
    Route::get('/scientifique/stocker',[]);
    Route::get('/scientifique/partager',[]);
    Route::get('/scientifique/recherhcer',[]);
    Route::get('/scientifique/diffuser',[]);
    Route::get('/scientifique/publierRecherche',[]);
});


Route::middleware('popEnv_midd_cle')->group(function(){ //acces autoriser pour les population environnant
    Route::get('/populationenvironnant/consulterMeteo',[]);
    Route::get('/populationenvironnant/stocker',[]);
    Route::get('/populationenvironnant/partager',[]);
    Route::get('/populationenvironnant/rechercher',[]);
    Route::get('/populationenvironnant/diffuser',[]);
});


Route::middleware('ong_midd_cle')->group(function(){ //acces autoriser pour les ong
    Route::get('/ong/consulterMeteo',[]);
    Route::get('/ong/stocker',[]);
    Route::get('/ong/partager',[]);
    Route::get('/ong/rechercher',[]);
    Route::get('/ong/diffuser',[]);
    Route::get('/ong/visualiserProjet',[]);
    Route::get('/ong/diffuser/financerProjet',[]);
});


Route::middleware('serv_etat_midd_cle')->group(function(){ //acces autoriser pour les service de l'etat
    Route::get('/serviceetat/consulterMeteo',[]);
    Route::get('/serviceetat/stocker',[]);
    Route::get('/serviceetat/partager',[]);
    Route::get('/serviceetat/rechercher',[]);
    Route::get('/serviceetat/diffuser',[]);
    Route::get('/serviceetat/GererAppelDoffre',[]);
});


Route::middleware('sect_prive_midd_cle')->group(function(){ //acces autoriser pour les secteur prive
    Route::get('/secteurprive/consulterMeteo',[]);
    Route::get('/secteurprive/stocker',[]);
    Route::get('/secteurprive/partager',[]);
    Route::get('/secteurprive/rechercher',[]);
    Route::get('/secteurprive/diffuser',[]);
    Route::get('/secteurprive/postulerSurAppelDoffre',[]);
});


Route::middleware('admin_midd_cle')->group(function(){ //acces autoriser pour les admin
    Route::get('/admin/gererUtilisateur',[]);
    Route::get('/admin/gererAgenda',[]);
    Route::get('/admin/publierMeteo',[]);
    Route::get('/admin/publierRapport');
});


/**commentaire de Marie */

