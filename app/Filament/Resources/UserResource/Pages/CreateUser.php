<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;

class CreateUser extends CreateRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected function getTitle(): string
    {
        return 'Crear Usuarios';
    }

    protected static string $resource = UserResource::class;

    protected function getSteps(): array
    {
        return [
            Step::make('Personal')
                ->description('Información Personal')
                ->schema([
                    FileUpload::make('imagen')->avatar()->image()->columnspan(span: 'full'),
                    TextInput::make('nombre')
                        ->required(),
                    TextInput::make('apellido')
                        ->required(),
                    TextInput::make('email')
                        ->required(),
                    TextInput::make('password')
                        ->required(),
                    TextInput::make('direccion')->required(),
                    BelongsToSelect::make('distritos_id')->relationship('distritos', 'nombre'),
                    TextInput::make('dni')->required(),
                    Select::make('estado_civil')
                    ->options([
                        'casado' => 'Casado',
                        'soltero' => 'Soltero',
                        'viudo' => 'Viudo',
                    ]),
                    Select::make('sexo')
                    ->options([
                        'femenino' => 'Femenino',
                        'masculino' => 'Masculino',
                    ]),
                    TextInput::make('movil')->required(),
                    TextInput::make('tel_casa_1'),
                    TextInput::make('edad')->required(),
                    TextInput::make('tel_casa_2'),
                    DatePicker::make('fecha_nacimiento')->format('Y-m-d')->displayFormat('d/m/Y'),
                    ]),
            Step::make('Detalles')
                ->description('Detalles')
                ->schema([
                    BelongsToSelect::make('cargos_id')->relationship('cargos', 'nombre'),
                    BelongsToSelect::make('areas_id')->relationship('areas', 'nombre'),
                    BelongsToSelect::make('categorias_id')->relationship('categorias', 'nombre'),
                    TextInput::make('acuerdo')->required(),
                    TextInput::make('reglamento')->required(),
                    DatePicker::make('fecha_ingreso')->format('Y-m-d')->displayFormat('d/m/Y'),
                    DatePicker::make('fecha_cese')->format('Y-m-d')->displayFormat('d/m/Y'),
                ]),
        ];
    }
}
