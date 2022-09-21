<?php

namespace App\Models;

use App\Models\Note;
use App\Models\Campus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';

    protected $fillable = [
        'avatar',
        'staff_code',
        'staff_name',
        'staff_surname',
        'staff_dob',
        'staff_pob',
        'staff_adress',
        'staff_phone',
        'staff_email',
        'staff_ville',
        'staff_postal',
        'staff_sexe',
        'staff_country'
    ];
    public function campus()
    {
        return $this->hasOne(Campus::class);
    }
    public function note()
    {
        return $this->hasMany(Note::class);
    }
}
