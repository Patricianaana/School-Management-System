<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setup extends Model
{
    use HasFactory;
    protected $fillables=[
        'start_mark',
        'end_mark',
        'grade',
        'remarks',
        'created_at',
        'updated_at'
    ];
    public function Exrec(){
        return $this->belongsTo(Record::class, 'grade_id');
    }

    public function record()
    {
        return $this->hasMany(Record::class, 'id', 'grade_id');
    }
}
