<?php

namespace App\Filament\Resources\ActualiteResource\Pages;

use App\Filament\Resources\ActualiteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateActualite extends CreateRecord
{
    protected static string $resource = ActualiteResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        $data['date'] = now();
    
        return $data;
    }

    protected function getCreatedNotificationMessage(): ?string
    {
        return 'Fichier créé avec succès';
    }
}
