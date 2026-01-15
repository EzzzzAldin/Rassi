<?php

namespace App\Filament\Resources\TermsConditions\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TermsConditionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('en_title')
                    ->toggleable()
                    ->label('Title (EN)'),
                TextColumn::make('ar_title')
                    ->toggleable()
                    ->label('Title (AR)'),
                TextColumn::make('en_content')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Content (EN)')
                    ->limit(50),

                TextColumn::make('ar_content')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Content (AR)')
                    ->limit(50),

                TextColumn::make('is_active')
                    ->toggleable()
                    ->badge(),
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
