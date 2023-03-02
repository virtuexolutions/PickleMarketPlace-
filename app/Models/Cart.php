<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;
    protected $table ='carts';
    protected $guarded = ['id'];
    

    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }
}
