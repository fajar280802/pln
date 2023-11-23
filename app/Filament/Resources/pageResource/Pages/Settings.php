<?php

namespace App\Filament\Resources\pageResource\Pages;

use App\Filament\Resources\pageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class Settings extends EditRecord
{
    protected static string $resource = pageResource::class;
    
    public function getHeading(): string
{
    return ('Custom Page Heading');
}
}
