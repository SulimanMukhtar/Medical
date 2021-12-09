<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';

    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }

    public function TestResults()
    {
        return $this->hasMany(TestResult::class);
    }
}
