<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer_order()
    {
        return $this->hasMany(Customer_Order::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
