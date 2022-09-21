<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_name',
        'unit_code',
        'course_id',
    ];

    // une unité d'enseignement peut avoir une multitude de parcours

    /**
     * Get the courses for the units.
     */

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // une unité d'ensignement peut avoir une multitude de matière

    /**
     * Get the subject for the units.
     */

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
}
