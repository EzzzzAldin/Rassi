<?php

namespace App\Filament\Resources\ContactUsMessages\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactUsMessagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->limit(50)
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('email')
                    ->toggleable(),
                TextColumn::make('phone')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('message')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->limit(50),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->toggleable()
                    ->dateTime('Y-m-d'),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime('Y-m-d'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
