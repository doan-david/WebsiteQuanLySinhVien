<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassName extends Model
{
    use HasFactory;
    public function student()
    {
        return $this->hasMany(Student::class,'className_id','id');
    }
}
