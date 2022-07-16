<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre',
        'monto',
        'porcentaje',
        'estado',
    ];

    //public function productos()
    //{
        //return $this->belongsTo(Producto::class);
    //}
}
