<?php

namespace App\Filament\Resources\TypeFichierResource\Pages;

use App\Filament\Resources\TypeFichierResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTypeFichiers extends ManageRecords
{
    protected static string $resource = TypeFichierResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
