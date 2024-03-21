<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $fillables=
    [
        'Student_id',
        'exam_score',
        'examination_id',
        'grade_id'
    ];

    protected $timestamp = false;

    public function classroom()
    {
        return $this->hasMany(Examination::class, 'Exam_id');

    }
    public function student()
    {
        return $this->belongsTo(Student::class,'Student_id');

    }
    public function grade()
    {
        return $this->belongsTo(Setup::class, 'grade_id', 'id');
    }
    public function examination()
    {
        return $this->belongsTo(Examination::class, 'examination_id');
    }
}
