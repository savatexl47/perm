<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\FileUpload;

class UserResource extends Resource
{
    
    protected static ?string $navigationLabel = 'Usuarios';

    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('imagen')->avatar()->image()->columnspan(span: 'full'),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('password')->required(),
                Forms\Components\TextInput::make('nombre')->required(),
                Forms\Components\TextInput::make('apellido')->required(),
                Forms\Components\TextInput::make('direccion')->required(),
                Forms\Components\TextInput::make('distrito')->required(),
                Forms\Components\TextInput::make('dni')->required(),
                Forms\Components\TextInput::make('estado_civil')->required(),
                Forms\Components\TextInput::make('sexo')->required(),
                Forms\Components\TextInput::make('movil')->required(),
                Forms\Components\TextInput::make('tel_casa_1'),
                Forms\Components\TextInput::make('edad')->required(),
                Forms\Components\TextInput::make('tel_casa_2'),
                Forms\Components\TextInput::make('fecha_nacimiento')->required(),
                Forms\Components\TextInput::make('cargo')->required(),
                Forms\Components\TextInput::make('area')->required(),
                Forms\Components\TextInput::make('categoria')->required(),
                Forms\Components\TextInput::make('acuerdo')->required(),
                Forms\Components\TextInput::make('reglamento')->required(),
                Forms\Components\TextInput::make('fecha_ingreso')->required(),
                Forms\Components\TextInput::make('fecha_cese')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagen')->rounded(),
                Tables\Columns\TextColumn::make('email'),
                //Tables\Columns\TextColumn::make('password'),
                Tables\Columns\TextColumn::make('nombre'),
                Tables\Columns\TextColumn::make('apellido'),
                Tables\Columns\TextColumn::make('direccion'),
                Tables\Columns\TextColumn::make('distritos.nombre'),
                Tables\Columns\TextColumn::make('dni'),
                Tables\Columns\TextColumn::make('estado_civil'),
                Tables\Columns\TextColumn::make('sexo'),
                Tables\Columns\TextColumn::make('movil'),
                Tables\Columns\TextColumn::make('tel_casa_1'),
                Tables\Columns\TextColumn::make('edad'),
                Tables\Columns\TextColumn::make('tel_casa_2'),
                Tables\Columns\TextColumn::make('fecha_nacimiento'),
                Tables\Columns\TextColumn::make('cargos.nombre'),
                Tables\Columns\TextColumn::make('areas.nombre'),
                Tables\Columns\TextColumn::make('categorias.nombre'),
                Tables\Columns\TextColumn::make('acuerdo'),
                Tables\Columns\TextColumn::make('reglamento'),
                Tables\Columns\TextColumn::make('fecha_ingreso'),
                Tables\Columns\TextColumn::make('fecha_cese'),
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
