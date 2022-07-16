<?php

namespace App\Filament\Resources\ProductoResource\Pages;

use App\Filament\Resources\ProductoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProducto extends CreateRecord
{
    protected function getTitle(): string
    {
        return 'Crear Productos';
    }

    protected static string $resource = ProductoResource::class;
}
