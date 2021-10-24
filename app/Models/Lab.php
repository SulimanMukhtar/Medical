<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;

    protected $table = 'labs';

    protected $primaryKey = 'id';

    // protected $fillable = ['','',''];

    public function labTests()
    {
        return $this->hasMany(LabTest::class);
    }
}
