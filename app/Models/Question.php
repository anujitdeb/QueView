<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    protected $fillable = [
        'institution',
        'course_title',
        'course_code',
        'exam_name',
        'question_name',
        'solution_name',
        'status'
    ];
}
