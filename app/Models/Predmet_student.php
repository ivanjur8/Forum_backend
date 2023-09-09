<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predmet_student extends Model
{
    use HasFactory;

    protected $table = 'predmeti_studenti';

    protected $fillable = ['ocjena','predmet_id','student_id'];

    public function studenti()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function predmeti()
    {
        return $this->belongsTo(Predmet::class, 'predmet_id');
    }


}
