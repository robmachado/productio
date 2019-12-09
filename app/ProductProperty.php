<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductProperty extends Model
{
    protected $fillable = [
        'product_id',
        'property_id',
        'process_id',
        'value_min',
        'value_med',
        'value_max',
        'unit_id',
    ];
}
