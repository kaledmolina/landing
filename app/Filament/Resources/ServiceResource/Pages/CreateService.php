<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Actions;
use Filament\Notifications\Notification;

use Filament\Resources\Pages\CreateRecord;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Servicio registrado')
        ->body('El servicio se ha creado correctamente.');
}
}
