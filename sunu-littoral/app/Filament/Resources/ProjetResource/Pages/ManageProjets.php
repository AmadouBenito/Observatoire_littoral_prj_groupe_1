<?php

namespace App\Filament\Resources\ProjetResource\Pages;

use App\Filament\Resources\ProjetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageProjets extends ManageRecords
{
    protected static string $resource = ProjetResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
    
        return $data;
    }
    protected function getCreatedNotificationMessage(): ?string
    {
        return 'Projet créée avec succès';
    }
}
