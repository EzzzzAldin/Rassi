<?php

namespace App\Filament\Resources\ContactUsMessages\Pages;

use App\Filament\Resources\ContactUsMessages\ContactUsMessageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContactUsMessage extends CreateRecord
{
    protected static string $resource = ContactUsMessageResource::class;
}
