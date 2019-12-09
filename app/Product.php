<?php

namespace App;

use App\ProductBill;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code',
        'name',
        'description',
        'client',
        'excode',
        'available',
        'created_at',
    ];

    public function bills()
    {
        return $this->hasMany(ProductBill::class);
    }
}
