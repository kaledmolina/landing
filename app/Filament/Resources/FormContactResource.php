<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\FormContact;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FormContactResource\Pages;
use App\Filament\Resources\FormContactResource\RelationManagers;

class FormContactResource extends Resource
{
    protected static ?string $model = FormContact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label(__('name'))
                ->autofocus()
                ->required()
                ->placeholder(__('name')),
                TextInput::make('email')
                    ->label(__('email'))
                    ->autofocus()
                    ->required()
                    ->placeholder(__('name')),
                TextInput::make('message')
                    ->label(__('message'))
                    ->autofocus()
                    ->required()
                    ->placeholder(__('message')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Textcolumn::make('name')
                    ->label(__('name'))
                    ->sortable()
                    ->searchable(),
                Textcolumn::make('email')
                    ->label(__('email'))
                    ->sortable()
                    ->searchable()
                    ->icon('heroicon-m-envelope'),
                Textcolumn::make('message')
                ->size(TextColumn\TextColumnSize::Large),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make()
                    ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFormContacts::route('/'),
            'create' => Pages\CreateFormContact::route('/create'),
            'edit' => Pages\EditFormContact::route('/{record}/edit'),
        ];
    }
}
