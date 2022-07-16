<?php

namespace App\Filament\Resources\ProfesioneResource\Pages;

use App\Filament\Resources\ProfesioneResource;
use Filament\Resources\Pages\ListRecords;

class ListProfesiones extends ListRecords
{
    protected function getTitle(): string
    {
        return 'Profesiones';
    }

    protected static string $resource = ProfesioneResource::class;
}
