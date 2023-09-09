<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    protected $table = 'teme';

    protected $fillable = ['naziv', 'opis','student_id','predmet_id'];

    public function studenti()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function predmeti()
    {
        return $this->belongsTo(Predmet::class, 'predmet_id');
    }
}
