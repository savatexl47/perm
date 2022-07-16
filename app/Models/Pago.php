<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable =[
        'fecha',
        'concepto',
        'socio',
        'plan',
        'inicio',
        'vencimiento',
        'moneda',
        'forma',
        'banco',
        'tipo_cuenta',
        'numero_cuenta',
        'tarjeta',
        'numero_tarjeta',
        'recibidor',
        'check_dscto',
        'tarifa_dscto',
        'autoriza_dscto',
        'monto_dscto',
        'monto_plan',
        'monto_soles',
        'monto_dolares',
        'monto_tarjeta',
        'tipo_documento',
        'serie_documento',
        'numero_documento',
        'estado',
        'check_empresa',
        'empresa',
        'contrato',
        'observaciones',
        'hora',
        'vendedor',
        'anula',
        'fecha_anula',
    ];
}
