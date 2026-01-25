<?php

namespace App\Filament\Resources\ContactUsMessages\Pages;

use App\Filament\Resources\ContactUsMessages\ContactUsMessageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactUsMessages extends ListRecords
{
    protected static string $resource = ContactUsMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
