<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assiduite extends Model
{
    use HasFactory;

    protected $table = 'assiduites';

    // protected $cast = ['justificatif' => 'array'];

    protected $fillable = [
        'justificatif',
        'retard',
        'date',
        'time',
    ];

    // je veux récuperer l'etudiant qui est absent
    public function student()
    {
        return $this->belongsToMany(Student::class);
    }
}
