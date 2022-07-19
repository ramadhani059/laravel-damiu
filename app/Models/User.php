<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function owner()
    {
        return $this->hasOne(Owner::class);
    }

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function categorie()
    {
        return $this->belongsTo(User_Category::class);
    }

    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

}
