<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigData extends Model
{
    use HasFactory;
     /* ASIGNACION MASIVA  */
     protected $fillable = ['titulo', 'icono', 'favicon', 'color', 'mapa', 'facebook', 'twitter', 'youtube', 'num_contacto'];
     public $timestamps = false;

}
