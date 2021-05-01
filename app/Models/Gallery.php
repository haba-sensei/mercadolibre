<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    /* ASIGNACION MASIVA  */
    protected $fillable = ['imageable_id', 'imageable_type'];


    /* RELACION MUCHOS A MUCHOS */
    public function products(){
    return $this->belongsToMany(Product::class);
    }

    //relacion polimorfica
    public function imageable(){
        return $this->morphTo();
    }
}
