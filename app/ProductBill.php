<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBill extends Model
{
    protected $fillable = [
        'product_id',
        'raw_id',
        'process_id',
        'qty',
    ];

    public function produto()
    {
        return $this->belongsTo(Product::class);
    }

    public function rawmaterial()
    {
        return $this->belongsTo(RawMaterial::class);
    }
}
