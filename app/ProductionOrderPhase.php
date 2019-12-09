<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductionOrderPhase extends Model
{
    protected $fillable = [
        'order_id',
        'process_id',
        'machine_id',
        'description',
        'qty',
        'unit',
    ];
}
