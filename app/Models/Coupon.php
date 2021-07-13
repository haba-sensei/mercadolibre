<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $table = "coupons";
    /* ASIGNACION MASIVA  */
    protected $fillable = ['code', 'type', 'value', 'cart_value', 'status'];

    /* CAMBIO DE URL DE ID -> SLUG  */
    public function getRouteKeyName()
    {
        return "code";
    }

     /* BUSQUEDA DE CATEGORIA */
     public function scopeSearch($query, $val)
     {
         return $query
                 ->where('code', 'like', '%'.$val.'%')
                 ->OrWhere('type', 'like', '%'.$val.'%');
     }

}
