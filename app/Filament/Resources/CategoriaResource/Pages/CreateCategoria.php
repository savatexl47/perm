<?php

namespace App\Filament\Resources\CategoriaResource\Pages;

use App\Filament\Resources\CategoriaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCategoria extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Categoria';
    }

    protected static string $resource = CategoriaResource::class;
}
