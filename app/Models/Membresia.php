<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    use HasFactory; 

    protected $table = 'membresias';

    protected $guarded = ['id', 'create_at', 'update_at'];



    public function tienda(){
        return $this->hasOne(Tienda::class);
    }

     //relacion 1 a 1 inversa
     public function plan(){
        return $this->hasOne(Planes::class, 'id');
    }



}
