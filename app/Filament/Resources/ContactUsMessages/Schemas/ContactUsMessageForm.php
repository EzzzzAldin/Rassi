<?php

namespace App\Filament\Resources\ContactUsMessages\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactUsMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->maxLength(255)
                    ->required()
                    ->rules(['required', 'string', 'max:255']),
                TextInput::make('email')
                    ->maxLength(255)
                    ->email()
                    ->required()
                    ->rules(['required', 'email', 'max:255']),
                TextInput::make('phone')
                    ->maxLength(20)
                    ->required()
                    ->rules(['nullable', 'string', 'max:20']),
                Textarea::make('message')
                    ->maxLength(2000)
                    ->required()
                    ->rules(['required', 'string', 'max:2000']),
            ]);
    }
}
