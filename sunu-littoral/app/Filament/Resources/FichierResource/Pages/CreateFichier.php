<?php

namespace App\Filament\Resources\FichierResource\Pages;

use App\Filament\Resources\FichierResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFichier extends CreateRecord
{
    protected static string $resource = FichierResource::class;
    
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
        return 'Actualité créée avec succès';
    }
}
