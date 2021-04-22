<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

     //relacion 1 a muchos
     public function products(){
        return $this->hasMany(Product::class);
    }


    //relacion 1 a 1 inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion 1 a 1 inversa
    public function profiles(){
        return $this->belongsTo(Profiles::class);
    }
}
