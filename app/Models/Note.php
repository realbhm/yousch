<?php

namespace App\Models;

use App\Models\Staff;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;
    protected $fillable=['student_id','subject_id','note','staff_id'];
    protected $date=['created_at','updated_at'];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
