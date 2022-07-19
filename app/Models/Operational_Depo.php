<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operational_Depo extends Model
{
    use HasFactory;

    public function depo()
    {
        return $this->belongsTo(Depo::class);
    }
}
