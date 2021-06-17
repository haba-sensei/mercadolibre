<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /* ASIGNACION MASIVA TIPO GUARDED SOLO ELEMENTOS QUE NO QUEREMOS QUE SEAN ASIGNADOS MASIVAMENTE */
    protected $guarded = ['id', 'create_at', 'update_at'];

    /* CAMBIO DE URL DE ID -> SLUG  */
    public function getRouteKeyName()
    {
        return "slug";
    }

     //relacion 1 a muchos inversa
     public function tienda(){

        return $this->belongsTo(Tienda::class);
    }

    public function orderItems()
    {
        return $this->belongsTo(OrderItem::class);
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

    //relacion 1 a muchos
    public function gallery(){

    return $this->morphMany(Gallery::class, 'imageable');

    }

    /* BUSQUEDA DE CATEGORIA */
    public function scopeSearch($query, $val)
    {
        return $query
                ->where('name', 'like', '%'.$val.'%')
                ->OrWhere('slug', 'like', '%'.$val.'%')
                ->OrWhere('category_id', '=', $val);
    }
}
