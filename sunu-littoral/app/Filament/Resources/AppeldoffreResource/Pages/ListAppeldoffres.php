<?php

namespace App\Filament\Resources\AppeldoffreResource\Pages;

use App\Filament\Resources\AppeldoffreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAppeldoffres extends ListRecords
{
    protected static string $resource = AppeldoffreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
