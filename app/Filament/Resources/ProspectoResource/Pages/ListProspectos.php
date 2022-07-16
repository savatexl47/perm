<?php

namespace App\Filament\Resources\ProspectoResource\Pages;

use App\Filament\Resources\ProspectoResource;
use Filament\Resources\Pages\ListRecords;

class ListProspectos extends ListRecords
{
    protected function getTitle(): string
    {
        return 'Prospectos';
    }

    protected static string $resource = ProspectoResource::class;
}
