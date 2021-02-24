<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutores extends Model
{
    use HasFactory;
    public $fillable = ['nombre_empresa', 'documentType', 'documentNumber', 'nom', 'llinatge1', 'llinatge2', 'pais_documento', 'provincia', 'municipio', 'status', 'telefono', 'correo'];

}