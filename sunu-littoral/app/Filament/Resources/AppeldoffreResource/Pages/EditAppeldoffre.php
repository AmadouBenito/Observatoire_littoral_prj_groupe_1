<?php

namespace App\Filament\Resources\AppeldoffreResource\Pages;

use App\Filament\Resources\AppeldoffreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAppeldoffre extends EditRecord
{
    protected static string $resource = AppeldoffreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotificationMessage(): ?string
    {
        return 'Appel d\'offre modifié';
    }
}
