<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];

    public function product()
    {
        return $this->hasOne(\App\Models\Product::class ,'user_id','id');
    }
    
    public function payment()
    {
        return $this->hasOne(\App\Models\Payment::class ,'payment_id','payment_id');
    }
    
    public function order_items()
    {
        return $this->hasMany(\App\Models\OrderItem::class ,'order_id','id');
    }
}
