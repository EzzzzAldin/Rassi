<?php

namespace App\Filament\Resources\TermsConditions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Visualbuilder\FilamentTinyEditor\TinyEditor;

class TermsConditionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('English Content')
                    ->schema([
                        TextInput::make('en_title')
                            ->label('Title (EN)')
                            ->required(),

                        TinyEditor::make('en_content')
                            ->label('Content (EN)')
                            ->columnSpanFull(),
                    ]),

                Section::make('Arabic Content')
                    ->schema([
                        TextInput::make('ar_title')
                            ->label('Title (AR)')
                            ->extraAttributes(['dir' => 'rtl'])
                            ->required(),

                        TinyEditor::make('ar_content')
                            ->label('Content (AR)')
                            ->extraAttributes(['dir' => 'rtl'])
                            ->columnSpanFull(),
                    ]),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }
}
