<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $table = 'alquileres'; // Nombre de la tabla en la base de datos

    protected $fillable = ['vehiculo']; // Asegúrate de listar todos los campos que pueden ser rellenados
}
