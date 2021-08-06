<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'user_id',
       'category_id',
       'image',
       'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        // return $this->belongsTo(Category::class,'image','image_id');
        return $this->belongsTo(Category::class);
    }
    
    public function chapters()
    {
        // return $this->belongsTo(Category::class,'image','image_id');
        return $this->hasMany(Chapters::class, 'course_id', 'id');
    }


}
