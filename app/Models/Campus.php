<?php

namespace App\Models;

use App\Models\Staff;
use App\Models\Classe;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campus extends Model
{
    use HasFactory;

    protected $table = 'campus';

    protected $fillable = [
        'campus_name',
        'campus_location',
        'campus_phone',
        'campus_email',
        'staff_id',
    ];

    /**
     * Get the staff that owns the campus.
     */
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function classes()
    {
        return $this->hasMany(Classe::class);
    }
}
