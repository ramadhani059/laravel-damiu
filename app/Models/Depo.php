<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depo extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->hasOne(Owner::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function supplier()
    {
        return $this->hasMany(Supplier::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function operational_depo()
    {
        return $this->hasMany(Operational_Depo::class);
    }

    public function customer_order()
    {
        return $this->hasMany(Customer_Order::class);
    }

    public function expense()
    {
        return $this->hasMany(Expense::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
