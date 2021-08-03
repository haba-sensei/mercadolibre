<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    use HasFactory;

    protected $table = 'membresias_pagos';

    protected $guarded = ['id', 'create_at', 'update_at'];


    /* BUSQUEDA DE CATEGORIA */
    public function scopeSearch($query, $val)
    {
        return $query
                ->where('reference_id', 'like', '%'.$val.'%')
                ->OrWhere('transaction_id', 'like', '%'.$val.'%')
                ->OrWhere('fecha_at', 'like', '%'.$val.'%');
    }
}
