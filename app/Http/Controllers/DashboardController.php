<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chapters;
use App\Models\Courses;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Admin(){
        $course = Courses::get()->count();
        $teacher = User::where('role','Teacher')->count();
        $user = User::where('role','Student')->count();
        $category = Category::get()->count();

        return view('Admin.Dashboard')->with(['course'=>$course,'teacher'=>$teacher,'user'=>$user,'category'=>$category]);
    }
    
    public function Teacher(){
        $course = Courses::get()->count();
        $chapter = Chapters::get()->count();

        return view('Teacher.Dashboard')->with(['course'=>$course,'chapter'=>$chapter,]);
    }

    
}
