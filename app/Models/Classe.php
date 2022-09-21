<?php

namespace App\Models;

use App\Models\Campus;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = [
        'class_name',
        'class_code',
        'campus_id'
    ];
    
    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
    
    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }
}
