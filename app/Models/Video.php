<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title',
        'video',
        'chapters_id',
        'course_id'
        
    ];

    public function chapters()
    {
        return $this->hasMany(Chapters::class,'chapters_id', 'id');
    }
    public function course()
    {
        return $this->belongsTo(Courses::class,'course_id', 'id');
    }
}
