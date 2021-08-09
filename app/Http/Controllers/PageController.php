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
        $students = User::where('role','Student')->get();
        $article = Article::all()->first();
        // $articles = Article::all();
        
        // dd($article->toArray());
        return view('Users.home')->with(['categories' => $categories   , 'courses' => $courses , 'teachers' => $teachers , 'students' => $students , 'article' => $article]);
    }
}
