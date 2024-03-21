<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillables = 
    [
        'student_id',
        'name',
        'age',
        'email',
        'address',
        'contact',
        'nationality',
        'classes_id'
    ];

    public function classRoom()
    {
        return $this->belongsTo(Classroom::class, 'classes_id', 'id');
    }
    
}
