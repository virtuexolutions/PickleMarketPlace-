<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $guarded = [];

    public function product()
    {
        return $this->hasOne(\App\Models\Product::class ,'id','product_id');
    }
}
