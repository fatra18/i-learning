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
        
    ];

    public function chapter()
    {
        return $this->hasMany(Chapters::class);
    }
}
