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

Route::get('/images', [ControllerMedia::class, 'images'])->name('accueil.image');
Route::get('/appelOffre', [ControllerProjet::class, 'appelOffre'])->name('accueil.appelOffre');
Route::get('/projet', [ControllerProjet::class, 'projet'])->name('accueil.projet');
Route::get('/postuler/{fichier},{appelOffre_id}', [ControllerProjet::class, 'postuler'])->name('appelOffre.postuler');
Route::get('/projet/telecharger{id}', [ControllerProjet::class, 'telecharger_projet'])->name('projet.telecharger');
Route::get('/Interesse/{id_projet}', [ControllerProjet::class, 'sIntéréssée'])->name('projet.sIntéréssée');

Route::get('/videos', [ControllerMedia::class, 'videos'])->name('accueil.video');
Route::get('/audios', [ControllerMedia::class, 'audios'])->name('accueil.audio');

Route::middleware('auth')->group(function () { //il faut s'authentifier pour acceder a ces routes
    Route::get('/pecheur', [ControllerPecheur::class, 'page_pecheur']);
    Route::get('/scientifique', [ControllerScientifique::class, 'page_scientifique']);
    Route::get('/populationenvironnant', [ControllerPopulationEnvironnant::class, 'page_pop_env']);
    Route::get('/ong', [ControllerOng::class, 'page_ong']);
    Route::get('/serviceetat', [ControllerServiceEtat::class, 'page_service_etat']);
    Route::get('/secteurprive', [ControllerSecteurPrive::class, 'page_secteur_prive']);
    Route::get('publier/{record}', [Controller::class, 'publier_fichier'])->name('partager_fichier');
    Route::get('no_publier/{record}', [Controller::class, 'no_publier_fichier'])->name('no_partager_fichier');
});

Route::middleware('pecheur_midd_cle')->group(function () { //acces autoriser pour les pecheurs
    Route::get('/pecheur/consulterMeteo', []);
    Route::get('/pecheur/stocker', []);
    Route::get('/pecheur/partager', []);
    Route::get('/pecheur/rechercher', []);
    Route::get('/pecheur/diffuser', []);
    Route::get('/pecheur/zoneArisque', []);
});


Route::middleware('scientifique_midd_cle')->group(function () { //acces autoriser pour les scientifique
    Route::get('/scientifique/consulterMeteo', []);
    Route::get('/scientifique/stocker', []);
    Route::get('/scientifique/partager', []);
    Route::get('/scientifique/recherhcer', []);
    Route::get('/scientifique/diffuser', []);
    Route::get('/scientifique/publierRecherche', []);
});


Route::middleware('popEnv_midd_cle')->group(function () { //acces autoriser pour les population environnant
    Route::get('/populationenvironnant/consulterMeteo', []);
    Route::get('/populationenvironnant/stocker', []);
    Route::get('/populationenvironnant/partager', []);
    Route::get('/populationenvironnant/rechercher', []);
    Route::get('/populationenvironnant/diffuser', []);
});


Route::middleware('ong_midd_cle')->group(function () { //acces autoriser pour les ongs
    Route::get('/ong/consulterMeteo', []);
    Route::get('/ong/stocker', []);
    Route::get('/ong/partager', []);
    Route::get('/ong/rechercher', []);
    Route::get('/ong/diffuser', []);
    Route::get('/ong/visualiserProjet', []);
    Route::get('/ong/diffuser/financerProjet', []);
});


Route::middleware('serv_etat_midd_cle')->group(function () { //acces autoriser pour les service de l'etat
    Route::get('/serviceetat/consulterMeteo', []);
    Route::get('/serviceetat/stocker', []);
    Route::get('/serviceetat/partager', []);
    Route::get('/serviceetat/rechercher', []);
    Route::get('/serviceetat/diffuser', []);
    Route::get('/serviceetat/GererAppelDoffre', []);
});


Route::middleware('sect_prive_midd_cle')->group(function () { //acces autoriser pour les secteur prive
    Route::get('/secteurprive/consulterMeteo', []);
    Route::get('/secteurprive/stocker', []);
    Route::get('/secteurprive/partager', []);
    Route::get('/secteurprive/rechercher', []);
    Route::get('/secteurprive/diffuser', []);
    Route::get('/secteurprive/postulerSurAppelDoffre', []);
});


Route::middleware('admin_midd_cle')->group(function () { //acces autoriser pour les admin
    Route::get('/admin/gererUtilisateur', []);
    Route::get('/admin/gererAgenda', []);
    Route::get('/admin/publierMeteo', []);
    Route::get('/admin/publierRapport');
});

/**commentaire de Marie */
