<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductionOrder extends Model
{
    protected $fillable = [
        'product_id',
        'sale_order',
        'customer_order',
        'delivery_date',
        'qty',
        'status',
    ];
}
