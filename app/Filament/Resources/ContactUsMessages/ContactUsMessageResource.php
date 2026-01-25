<?php

namespace App\Filament\Resources\ContactUsMessages;

use App\Filament\Resources\ContactUsMessages\Pages\CreateContactUsMessage;
use App\Filament\Resources\ContactUsMessages\Pages\EditContactUsMessage;
use App\Filament\Resources\ContactUsMessages\Pages\ListContactUsMessages;
use App\Filament\Resources\ContactUsMessages\Schemas\ContactUsMessageForm;
use App\Filament\Resources\ContactUsMessages\Tables\ContactUsMessagesTable;
use App\Models\ContactUsMessage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ContactUsMessageResource extends Resource
{
    protected static ?string $model = ContactUsMessage::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-envelope-open';

    protected static string|BackedEnum|null $activeNavigationIcon = 'heroicon-s-envelope-open';

    public static function form(Schema $schema): Schema
    {
        return ContactUsMessageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactUsMessagesTable::configure($table);
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
            'index' => ListContactUsMessages::route('/'),
            'create' => CreateContactUsMessage::route('/create'),
            'edit' => EditContactUsMessage::route('/{record}/edit'),
        ];
    }

    public static function getNavigationSort(): ?int
    {
        return 5;
    }
}
