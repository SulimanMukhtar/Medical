<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;

    protected $table = 'labs';

    protected $primaryKey = 'id';

    protected $hidden = ['password'];


    // protected $fillable = ['','',''];

    public function TestMenu()
    {
        return $this->hasMany(TestMenu::class);
    }
}
