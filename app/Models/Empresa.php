<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre',
        'ruc',
        'direccion',
    ];

    public function asociados()
    {
        return $this->belongsTo(Asociado::class);
    }

    public function asistencias()
    {
        return $this->belongsTo(Asistencia::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
