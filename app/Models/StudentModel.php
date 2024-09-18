<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;

    protected $table = 't_students';

    protected $fillable = [
        'stud_first_name',
        'stud_last_name',
        'stud_email',
        'stud_age',
        'stud_strand',
        'stud_grade_level',
        'stud_section',
    ];
}
