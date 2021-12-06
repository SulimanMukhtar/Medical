<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestMenu extends Model
{
    use HasFactory;
    protected $table = 'TestMenus';

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
}
