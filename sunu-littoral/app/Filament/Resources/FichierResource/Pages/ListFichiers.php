<?php

namespace App\Filament\Resources\FichierResource\Pages;

use App\Filament\Resources\FichierResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFichiers extends ListRecords
{
    protected static string $resource = FichierResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
