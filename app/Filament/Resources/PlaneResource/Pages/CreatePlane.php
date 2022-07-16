<?php

namespace App\Filament\Resources\PlaneResource\Pages;

use App\Filament\Resources\PlaneResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePlane extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Planes';
    }

    protected static string $resource = PlaneResource::class;
}
