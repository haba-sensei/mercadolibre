<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $guarded = ['id', 'create_at', 'update_at'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

     /* RELACION 1 A MUCHOS */
     public function products()
     {
         return $this->belongsTo(Product::class, 'product_id');
     }

      /* RELACION 1 A MUCHOS */
      public function tienda()
      {
          return $this->belongsTo(Tienda::class, 'tienda_id');
      }

}
