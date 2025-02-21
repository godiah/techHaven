<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddressRelationManager extends RelationManager
{
    protected static string $relationship = 'address';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('first_name')
                    ->required()
                    ->maxLength(255),
                
                TextInput::make('last_name')
                    ->required()
                    ->maxLength(255),
                
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->maxLength(255),
                
                TextInput::make('phone')
                    ->required()
                    ->tel()
                    ->prefix('+254')
                    ->maxLength(255),
                
                TextInput::make('county')
                    ->label('County')
                    ->required()
                    ->maxLength(255),

                TextInput::make('town')
                    ->label('Town')
                    ->maxLength(255),
                
                TextInput::make('estate')
                    ->label('Estate/Street Name/Area')
                    ->maxLength(255),
                
                TextInput::make('house_no')
                    ->label('House/Plot Number')
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('estate')
            ->columns([
                TextColumn::make('full_name')
                    ->label('Full Name'),
                TextColumn::make('email')
                    ->label('Email'),
                TextColumn::make('phone')
                    ->label('Phone'),
                TextColumn::make('county')
                    ->label('County'),
                TextColumn::make('town')
                    ->label('Town'),
                TextColumn::make('estate')
                    ->label('Estate/Street Name/Area'),
                TextColumn::make('house_no')
                    ->label('House/Plot Number'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
