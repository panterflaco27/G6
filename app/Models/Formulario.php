<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;

    protected $fillable = [
        'correo',
        'paqueteria',
        'aplicaciones',
        'comunicarse',
        'pagina',
        'canal_YT',
        'blog',
        'computadora',
        'dispositivo',
        'marketing',
        'herramienta',
        'informacion',
        'email_cliente',
        'telefono_cliente'
    ];
}
