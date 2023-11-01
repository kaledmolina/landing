<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\Textcolumn;
use Filament\Tables;
use App\Models\Service;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ServiceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServiceResource\RelationManagers;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label(__('titulo'))
                    ->autofocus()
                    ->required()
                    ->placeholder(__('titulo')),
                TextInput::make('icon_class')
                    ->label(__('icon_class'))
                    ->autofocus()
                    ->placeholder(__('icon_class')),
                TextInput::make('short_desc')
                    ->label(__('short_desc'))
                    ->autofocus()
                    ->required()
                    ->placeholder(__('short_desc')),
                RichEditor::make('descripcion')
                    ->label(__('descripcion'))
                    ->autofocus()
                    ->required()
                    ->placeholder(__('descripcion'))
                    ->columnSpan(2),
                Select::make('status')
                    ->label(__('status'))
                    ->autofocus()
                    ->required()
                    ->placeholder(__('status'))
                    ->options([
                        1 => __('activo'),
                        0 => __('inactivo'),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               Textcolumn::make('title')
                    ->label(__('titulo'))
                    ->sortable()
                    ->searchable(),
                Textcolumn::make('icon_class')
                    ->label(__('icon_class'))
                    ->sortable()
                    ->searchable(),
                Textcolumn::make('short_desc')
                    ->label(__('short_desc'))
                    ->sortable()
                    ->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
