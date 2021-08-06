<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{

    protected $fillable = [
        'name',
        'course_id',
        'description'
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id', 'id');
    }

    public function video()
    {
        return $this->hasMany(Video::class);
    }
    
}
