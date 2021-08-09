<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    protected $fillable = [
        'telefono',
        'pais',
        'estado',
        'ciudad',
        'direccion',
        'user_id'
    ];

    use HasFactory;

     //relacion 1 a muchos inversa
     public function user(){
        return $this->belongsTo(User::class);
    }
}
