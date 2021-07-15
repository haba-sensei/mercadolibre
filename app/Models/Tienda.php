<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    /* ASIGNACION MASIVA  */
    protected $fillable = ['name', 'slug', 'resumen', 'email', 'phone', 'url_perfil', 'status', 'user_id'];

   

    public function getRouteKeyName()
    {
        return "slug";
    }

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

     //relacion 1 a 1 inversa
    public function membresia(){
        return $this->hasOne(Membresia::class);
    }



    /* BUSQUEDA DE CATEGORIA */
    public function scopeSearch($query, $val)
    {
        return $query
                ->where('name', 'like', '%'.$val.'%');
    }
}
