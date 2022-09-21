<?php

namespace App\Models;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'course_name',
        'course_code',
    ];

    // un parcours ne peut appartenir qu'à une seule unité d'enseignement
    public function unit()
    {
        return $this->hasMany(Unit::class);
    }
    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
