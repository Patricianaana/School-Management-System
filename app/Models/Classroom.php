<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillables =
    [
        'name',
        'building'
    ];

    public function student()
    {
        return $this->hasMany(Student::class, 'classes_id', 'id');
    }

    public function subject()
    {
        return $this->hasMany(Course::class, 'class_id', 'id');
    }
    public function Exams()
    {
        return $this->hasMany(Examination::class, 'Class_id', 'id');

    }
    public function RecorDs(){
        return $this->belongsTo(Record::class, 'Student_id');
    }
}
