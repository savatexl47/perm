<?php

namespace App\Filament\Resources\ProspectoResource\Pages;

use App\Filament\Resources\ProspectoResource;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;

class CreateProspecto extends CreateRecord
{
    
    use CreateRecord\Concerns\HasWizard;
    
    protected function getTitle(): string
    {
        return 'Crear Prospectos';
    }

    protected static string $resource = ProspectoResource::class;

    protected function getSteps(): array
    {
        return [
            Step::make('Personal')
                ->description('Información Personal')
                ->schema([
                    TextInput::make('nombre')
                        ->required(),
                    TextInput::make('apellido')
                        ->required(),
                    TextInput::make('email')
                        ->required(),
                    FileUpload::make('imagen')
                        ->preserveFilenames(),
                    TextInput::make('documento')->required(),
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
                    TextInput::make('edad'),
                    TextInput::make('nacionalidad')->required(),
                    DatePicker::make('fecha_nacimiento')->format('Y-m-d')->displayFormat('d/m/Y'),
                    
                ]),
            Step::make('Contacto')
                ->description('Información de Contacto')
                ->schema([
                    TextInput::make('tel_casa_1'),
                    TextInput::make('tel_casa_2'),
                    TextInput::make('movil')->required(),
                    TextInput::make('direccion')->required(),
                    BelongsToSelect::make('distritos_id')->relationship('distritos', 'nombre'),
                    DatePicker::make('fecha_cese')->format('Y-m-d')->displayFormat('d/m/Y'),
                    
                ]),
            Step::make('Detalles')
                ->description('Detalles')
                ->schema([
                    TextInput::make('cumpleaños')->required(),
                    Select::make('red_social_favorita')
                    ->options([
                        'facebook' => 'Facebook',
                        'instagram' => 'Instagram',
                        'linkedin' => 'LinkedIn',
                        'twitter' => 'Twitter',
                        'whatsapp' => 'Whatsapp',
                        'youtube' => 'Youtube',
                    ]),
                    Select::make('hijos')
                    ->options([
                        'si' => 'Si',
                        'no' => 'No',
                    ]),
                    TextInput::make('ruc')->required(),
                    TextInput::make('preferencia_en_promociones'),
                    DatePicker::make('fecha_vencimiento')->format('Y-m-d')->displayFormat('d/m/Y'),
                    TextInput::make('invitado'),
                    TextInput::make('dias_invitado'),
                    TextInput::make('asistencia_invitado'),
                    TextInput::make('nota'),
                ]),
        ];
    }
}
