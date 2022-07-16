<?php

namespace App\Filament\Resources\ProductoResource\Pages;

use App\Filament\Resources\ProductoResource;
use Filament\Resources\Pages\EditRecord;

class EditProducto extends EditRecord
{
    protected function getTitle(): string
    {
        return 'Editar Productos';
    }

    protected static string $resource = ProductoResource::class;
}
