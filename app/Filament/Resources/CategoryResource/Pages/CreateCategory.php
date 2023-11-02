<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\CategoryResource;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
    protected function getCreatedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Categoria registrada')
        ->body('La categoria se ha creado correctamente.');
}
protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
