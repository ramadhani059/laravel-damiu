<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;

    public $table = "order_details";

    public function customer_order()
    {
        return $this->belongsTo(Customer_Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
