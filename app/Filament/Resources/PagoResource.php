<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PagoResource\Pages;
use App\Filament\Resources\PagoResource\RelationManagers;
use App\Models\Pago;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PagoResource extends Resource
{
    protected static ?string $model = Pago::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('fecha')->required(),
                Forms\Components\TextInput::make('concepto')->required(),
                Forms\Components\TextInput::make('socio')->required(),
                Forms\Components\TextInput::make('plan')->required(),
                Forms\Components\TextInput::make('inicio')->required(),
                Forms\Components\TextInput::make('vencimiento')->required(),
                Forms\Components\TextInput::make('moneda')->required(),
                Forms\Components\TextInput::make('forma')->required(),
                Forms\Components\TextInput::make('banco')->required(),
                Forms\Components\TextInput::make('tipo_cuenta')->required(),
                Forms\Components\TextInput::make('numero_cuenta')->required(),
                Forms\Components\TextInput::make('tarjeta')->required(),
                Forms\Components\TextInput::make('numero_tarjeta')->required(),
                Forms\Components\TextInput::make('recibidor')->required(),
                Forms\Components\TextInput::make('check_dscto')->required(),
                Forms\Components\TextInput::make('tarifa_dscto')->required(),
                Forms\Components\TextInput::make('autoriza_dscto')->required(),
                Forms\Components\TextInput::make('monto_dscto')->required(),
                Forms\Components\TextInput::make('monto_plan')->required(),
                Forms\Components\TextInput::make('monto_soles')->required(),
                Forms\Components\TextInput::make('monto_dolares')->required(),
                Forms\Components\TextInput::make('monto_tarjeta')->required(),
                Forms\Components\TextInput::make('tipo_documento')->required(),
                Forms\Components\TextInput::make('serie_documento')->required(),
                Forms\Components\TextInput::make('numero_documento')->required(),
                Forms\Components\TextInput::make('check_empresa')->required(),
                Forms\Components\TextInput::make('empresa')->required(),
                Forms\Components\TextInput::make('contrato')->required(),
                Forms\Components\TextInput::make('observaciones')->required(),
                Forms\Components\TextInput::make('hora')->required(),
                Forms\Components\TextInput::make('vendedor')->required(),
                Forms\Components\TextInput::make('anula')->required(),
                Forms\Components\TextInput::make('fecha_anula')->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fecha'),
                Tables\Columns\TextColumn::make('concepto'),
                Tables\Columns\TextColumn::make('socio'),
                Tables\Columns\TextColumn::make('plan'),
                Tables\Columns\TextColumn::make('inicio'),
                Tables\Columns\TextColumn::make('vencimiento'),
                Tables\Columns\TextColumn::make('moneda'),
                Tables\Columns\TextColumn::make('forma'),
                Tables\Columns\TextColumn::make('banco'),
                Tables\Columns\TextColumn::make('tipo_cuenta'),
                Tables\Columns\TextColumn::make('numero_cuenta'),
                Tables\Columns\TextColumn::make('tarjeta'),
                Tables\Columns\TextColumn::make('numero_tarjeta'),
                Tables\Columns\TextColumn::make('recibidor'),
                Tables\Columns\TextColumn::make('check_dscto'),
                Tables\Columns\TextColumn::make('tarifa_dscto'),
                Tables\Columns\TextColumn::make('autoriza_dscto'),
                Tables\Columns\TextColumn::make('monto_dscto'),
                Tables\Columns\TextColumn::make('monto_plan'),
                Tables\Columns\TextColumn::make('monto_soles'),
                Tables\Columns\TextColumn::make('monto_dolares'),
                Tables\Columns\TextColumn::make('monto_tarjeta'),
                Tables\Columns\TextColumn::make('tipo_documento'),
                Tables\Columns\TextColumn::make('serie_documento'),
                Tables\Columns\TextColumn::make('numero_documento'),
                Tables\Columns\TextColumn::make('check_empresa'),
                Tables\Columns\TextColumn::make('empresa'),
                Tables\Columns\TextColumn::make('contrato'),
                Tables\Columns\TextColumn::make('observaciones'),
                Tables\Columns\TextColumn::make('hora'),
                Tables\Columns\TextColumn::make('vendedor'),
                Tables\Columns\TextColumn::make('anula'),
                Tables\Columns\TextColumn::make('fecha_anula'),
                
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
            'index' => Pages\ListPagos::route('/'),
            'create' => Pages\CreatePago::route('/create'),
            'edit' => Pages\EditPago::route('/{record}/edit'),
        ];
    }
}
