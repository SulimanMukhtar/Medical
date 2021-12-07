<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;


    public function Drugs()
    {
        return $this->hasMany(Drug::class);
    }

    public function Drugss()
    {
        return $this->hasMany(Drug::class, 'pharmacy_id', 'id');
    }
}
