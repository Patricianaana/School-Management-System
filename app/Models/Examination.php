<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;
    protected $fillables = 
    [
        'exams_name',
        'Class_id',
        'Course_id',
    ];
    public function ClassRoom()
    {
        return $this->belongsTo(Classroom::class, 'Class_id', 'id');
    }
    public function getCourse()
    {
        return $this->belongsTo(Course::class, 'Course_id', 'id');
    }


}
