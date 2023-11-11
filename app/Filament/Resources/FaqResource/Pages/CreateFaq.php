<?php

namespace App\Filament\Resources\FaqResource\Pages;

use Filament\Actions;
use App\Filament\Resources\FaqResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateFaq extends CreateRecord
{
    protected static string $resource = FaqResource::class;
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('faq registrada')
            ->body('La faq se ha creado correctamente.');
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
}
