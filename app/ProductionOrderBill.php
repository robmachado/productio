<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductionOrderBill extends Model
{
    protected $fillable = [
        'order_id',
        'raw_id',
        'qty',
    ];
}
