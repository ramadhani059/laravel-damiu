<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply_Product extends Model
{
    use HasFactory;

    public function supply_detail()
    {
        return $this->hasMany(Supply_Detail::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
