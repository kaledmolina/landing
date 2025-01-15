<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;


class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label(__('title'))
                ->autofocus()
                ->required()
                ->placeholder(__('title')),
                Select::make('category_id')->options(
                    Category::all()->pluck('name', 'id')
                )->label(__('category'))
                ->required(),
                TextInput::make('author')
                ->label(__('author'))
                ->autofocus()
                ->required()
                ->placeholder(__('author')),
                Select::make('status')
                    ->label(__('status'))
                    ->autofocus()
                    ->placeholder(__('status'))
                    ->options([
                        1 => __('activo'),
                        0 => __('inactivo'),
                    ]),
                RichEditor::make('content')
                        ->label(__('content'))
                        ->autofocus()
                        ->required()
                        ->placeholder(__('content')),
                FileUpload::make('image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Imagecolumn::make('image')
                    ->label(__('image'))
                    ->width('100'),
                TextColumn::make('title')
                    ->label(__('title'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('author')
                    ->label(__('author'))
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
