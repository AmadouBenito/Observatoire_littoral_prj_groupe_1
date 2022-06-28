<?php

namespace App\Filament\Resources\AppeldoffreResource\Pages;

use App\Filament\Resources\AppeldoffreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAppeldoffre extends CreateRecord
{
    protected static string $resource = AppeldoffreResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }

    protected function getCreatedNotificationMessage(): ?string
    {
        return 'Appel d\'offre créé. En attente de publication';
    }
}
