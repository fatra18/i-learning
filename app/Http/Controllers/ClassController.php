<?php

namespace App\Http\Controllers;

use App\Models\Chapters;
use App\Models\Courses;
use App\Models\Video;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function detail($id)
    {
        $course = Courses::findOrFail($id);
        $chapters = Chapters::where('id',$id)->get();

        return view('Users.details-course',compact('course','chapters'));
    }

    public function chapter_gallery($courseId,$videoId)
    {
        $videos  = Video::where('course_id',$courseId)->find($videoId);
        $videosPrev = Video::where('course_id',$courseId)->get();
        $videosNext = Video::where('course_id',$courseId)->orderBy('id', 'desc')->get();
        $course =   Courses::find($courseId);
        return view('Users.details-course'.[
            'videos' => $videos,
            'course' => $course,
            'videosPrev' => $videosPrev,
            'videosNext' => $videosNext

        ]);
     }

   
}
