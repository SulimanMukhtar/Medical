<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class labm extends Authenticatable
{
    use HasFactory;

    protected $table = 'labm';
    protected $hidden = ['password'];

}
