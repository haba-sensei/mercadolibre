<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /* ASIGNACION MASIVA  */
    protected $fillable = ['name', 'slug', 'color'];

    /* RELACION MUCHOS A MUCHOS */
    public function posts(){
        return $this->belongsToMany(Post::class);
    }

     /* RELACION MUCHOS A MUCHOS */
     public function products(){
        return $this->belongsToMany(Product::class);
    }

    /* CAMBIO DE URL DE ID -> SLUG  */
    public function getRouteKeyName()
    {
        return "slug";
    }

     /* BUSQUEDA DE CATEGORIA */
     public function scopeSearch($query, $val)
     {
         return $query
                 ->where('name', 'like', '%'.$val.'%')
                 ->OrWhere('slug', 'like', '%'.$val.'%');
     }
}
