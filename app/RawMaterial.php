<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
    protected $fillable = [
        'code',
        'name',
        'common_name',
        'description',
        'unit_id',
        'available',
        'created_at',
    ];


}
