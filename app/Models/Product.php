<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     /* CAMBIO DE URL DE ID -> SLUG  */
     public function getRouteKeyName()
     {
         return "slug";
     }

     //relacion 1 a muchos inversa
     public function tienda(){
        return $this->belongsTo(Tienda::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //relacion muchos a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //relacion 1 a 1 polimorfica
    public function image(){

        return $this->morphOne(Image::class, 'imageable');

   }
}
