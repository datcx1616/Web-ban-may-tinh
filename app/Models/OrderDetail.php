<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        "orderID",
        "productID",
        "price",
        "quantity",
    ];
    public function order()
    {
        return $this->belongsTo(Order::class, 'orderID', 'id');
    }
    public function product()
{
    return $this->belongsTo(Product::class, 'productID', 'id');
}


}