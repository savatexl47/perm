<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected function getTitle(): string
    {
        return 'Usuarios';
    }

    protected static string $resource = UserResource::class;
}
