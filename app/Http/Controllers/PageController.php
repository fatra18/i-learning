<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Courses;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // $jml_category = Courses::with('category')->count();
        $courses = Courses::all();
        $teachers = User::where('role','Teacher')->get();
        $students = User::where('role','Student')->paginate(3);
        $article = Article::OrderBy('created_at','desc')->take(5)->get();
        // $articles = Article::all();
        
        // dd($article[0]->title);
        return view('Users.home')->with([
            'categories' =>   $categories   , 'courses' => $courses , 'teachers' => $teachers , 'students' => $students , 'article' => $article ]);
    }
    
    public function detailTeacher($id){
        $teachers = User::where('role','Teacher')->find($id);
        return view('Users.teachers',compact('teachers'));
    }
    public function detailArticle($id){
        $article = Article::find($id);
        return view('Users.teachers',compact('article'));
    }
    
}
