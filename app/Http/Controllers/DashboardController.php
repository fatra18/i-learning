<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chapters;
use App\Models\Courses;
use App\Models\Preview;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Admin(){
        $course = Courses::get()->count();
        $teacher = User::where('role','Teacher')->count();
        $user = User::where('role','Student')->count();
        $category = Category::get()->count();
        $previews = Preview::with('course','user')->get();
        $jml_students = User::where('role','Student')->orderBy('id','desc')->get();
        $jml_teachers = User::where('role','Teacher')->orderBy('id','desc')->get();
        $jml_courses = Courses::orderBy('id','desc')->with('user')->get();
        $jml_categories = Category::orderBy('id','desc')->get();
        // dd($jml_courses->toArray());
        // $teacher_courses = Courses::where('user_id',Auth::user()->id)->get()->count();
        // dd($preview->toArray());
        return view('Admin.Dashboard')->with(['course'=>$course,'teacher'=>$teacher,'user'=>$user,'category'=>$category,'jml_students' => $jml_students,'jml_teachers' => $jml_teachers,'jml_courses' => $jml_courses,'jml_categories'=>$jml_categories , 'previews' => $previews]);
    }
    
    public function Teacher(){
        $course = Courses::get()->count();
        $chapter = Chapters::get()->count();
        $jml_students = User::where('role','Student')->orderBy('id','desc')->get();
        $jml_teachers = User::where('role','Teacher')->orderBy('id','desc')->get();
        $jml_courses = Courses::orderBy('id','desc')->with('user')->get();
        $jml_categories = Category::orderBy('id','desc')->get();

        return view('Teacher.Dashboard')->with(['course'=>$course,'chapter'=>$chapter,'jml_students' => $jml_students,'jml_teachers' => $jml_teachers,'jml_courses' =>$jml_courses,'jml_categories'=>$jml_categories]);
    }

    public function Student(){
        // dd($students->toArray());
        // return view('Admin.Dashboard')->with(['jml_students' => $jml_students]);
    }
}
