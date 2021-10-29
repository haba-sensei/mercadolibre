<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigImg extends Model
{
    use HasFactory;

    /* ASIGNACION MASIVA  */
    protected $fillable = ['url_imagen', 'class'];
    public $timestamps = false;
}
