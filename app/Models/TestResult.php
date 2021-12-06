<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    use HasFactory;
    protected $table = 'TestResults';

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
}
