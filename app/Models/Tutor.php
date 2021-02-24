<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    
    protected $table = "tutors";

    protected $fillable = [
        'nombreEmpresa',
        'tipoDocumento',
        'numeroDocumento',
        'nombre',
        'primerApellido',
        'segundoApellido',
        'paisDocumento',
        'provincia',
        'municipio',
        'estado',
        'numeroTelefono',
        'email'
    ];
}
