<?php

namespace App\Filament\Widgets;

use App\Models\Actualite;
use App\Models\Fichier;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make("Nombre d'utilisateurs",User::all()->count())
                ->description("Le nombre total d'utilisateur dans la plateforme")
                ->descriptionIcon('heroicon-s-user'),
            Card::make("Nombre fichiers dans la plateforme",Fichier::all()->count())
                ->description("Le nombre total de fichiers dans la plateforme")
                ->descriptionIcon('heroicon-s-folder')
                ,
            Card::make("Nombre d'actualités",Actualite::all()->count())
                ->description("Le nombre total d'actualité publié dans la plateforme")
                ->descriptionIcon('heroicon-s-newspaper'),
        ];
    }


}
