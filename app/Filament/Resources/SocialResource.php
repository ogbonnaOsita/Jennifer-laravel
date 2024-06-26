<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialResource\Pages;
use App\Filament\Resources\SocialResource\RelationManagers;
use App\Models\Social;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialResource extends Resource
{
    protected static ?string $model = Social::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // HIDE RESOURCE
    public static function canViewAny(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('facebook')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('twitter')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('instagram')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('facebook')
                    ->searchable(),
                Tables\Columns\TextColumn::make('twitter')
                    ->searchable(),
                Tables\Columns\TextColumn::make('linkedin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instagram')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListSocials::route('/'),
            'create' => Pages\CreateSocial::route('/create'),
            'view' => Pages\ViewSocial::route('/{record}'),
            'edit' => Pages\EditSocial::route('/{record}/edit'),
        ];
    }
}
