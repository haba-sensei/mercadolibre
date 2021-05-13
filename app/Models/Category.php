<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    /* ASIGNACION MASIVA  */
    protected $fillable = ['name', 'slug', 'cat_img'];

    /* CAMBIO DE URL DE ID -> SLUG  */
    public function getRouteKeyName()
    {
        return "slug";
    }

    /* RELACION 1 A MUCHOS */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /* RELACION 1 A MUCHOS */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /* BUSQUEDA DE CATEGORIA */
    public function scopeSearch($query, $val)
    {
        return $query
                ->where('name', 'like', '%'.$val.'%')
                ->OrWhere('slug', 'like', '%'.$val.'%');
    }


}
