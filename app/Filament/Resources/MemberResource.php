<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Member;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\Textcolumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MemberResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MemberResource\RelationManagers;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

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
                TextInput::make('designation')
                    ->label(__('designation'))
                    ->required()
                    ->autofocus()
                    ->placeholder(__('designation')),
                TextInput::make('fb_url')
                    ->url()
                    ->label(__('fb_url'))
                    ->autofocus()
                    ->placeholder(__('fb_url')),
                TextInput::make('tw_url')
                    ->url()
                    ->label(__('tw_url'))
                    ->autofocus()
                    ->placeholder(__('tw_url')),
                TextInput::make('in_url')
                    ->label(__('in_url'))
                    ->url()
                    ->autofocus()
                    ->placeholder(__('in_url')),
                FileUpload::make('image'),
                Select::make('status')
                    ->label(__('status'))
                    ->autofocus()
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
                Imagecolumn::make('image')
                    ->label(__('image'))
                    ->width('100'),
                Textcolumn::make('name')
                    ->label(__('name'))
                    ->sortable()
                    ->searchable(),
                Textcolumn::make('designation')
                    ->label(__('designation'))
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
