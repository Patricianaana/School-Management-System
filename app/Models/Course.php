<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillables = 
    [
        'name',
        'course_code',
        'class_id'
    ];

    public function clasSRoom()
    {
        return $this->belongsTo(Classroom::class, 'class_id', 'id');
    }
}
