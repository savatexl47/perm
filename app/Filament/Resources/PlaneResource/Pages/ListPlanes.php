<?php

namespace App\Filament\Resources\PlaneResource\Pages;

use App\Filament\Resources\PlaneResource;
use Filament\Resources\Pages\ListRecords;

class ListPlanes extends ListRecords
{
    protected function getTitle(): string
    {
        return 'Planes';
    }

    protected static string $resource = PlaneResource::class;
}
