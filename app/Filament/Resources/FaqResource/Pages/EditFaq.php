<?php

namespace App\Filament\Resources\FaqResource\Pages;

use Filament\Actions;
use App\Filament\Resources\FaqResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditFaq extends EditRecord
{
    protected static string $resource = FaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Faq Actualizado')
            ->body('Faq actualizado se ha Actualizado correctamente.');
    }
}
