<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function depo()
    {
        return $this->belongsTo(Depo::class);
    }

    public function order_detail()
    {
        return $this->hasMany(Order_Detail::class);
    }

    public function supply_detail()
    {
        return $this->hasMany(Supply_Detail::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
