<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    public function depo()
    {
        return $this->belongsTo(Depo::class);
    }

    public function supply_product()
    {
        return $this->hasMany(Supply_Product::class);
    }
}
