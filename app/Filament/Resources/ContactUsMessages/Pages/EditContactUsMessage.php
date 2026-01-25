<?php

namespace App\Filament\Resources\ContactUsMessages\Pages;

use App\Filament\Resources\ContactUsMessages\ContactUsMessageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditContactUsMessage extends EditRecord
{
    protected static string $resource = ContactUsMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
