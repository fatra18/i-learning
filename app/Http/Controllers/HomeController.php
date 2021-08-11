<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Courses;
use App\Models\Chapters;
use App\Models\User;
use App\Models\Article;
use App\Models\Preview;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $vid = request('video')
        
        $categories = Category::all();
        $courses = Courses::all();
        $teachers = User::where('role','Teacher')->get();
        $students = User::where('role','Student')->paginate(3);
        $article = Article::OrderBy('created_at','desc')->take(5)->get();
        // dd($article->toArray());
       return view('Users.home')->with([
            'categories' =>   $categories   , 'courses' => $courses , 'teachers' => $teachers , 'students' => $students , 'article' => $article ,    ]);
    }

    public function detailArticle($id){
        $articles = Article::with(['user','category'])->find($id);
        dd($articles->toArray());
        // return view('Users.article',compact('articles'));
    }
    
    public function detailCourse($courseId, $chapterId = null, $videoId = null){
        $course = Courses::findOrFail($courseId)
            ->with(['user', 'chapters.videos'])
            ->first();

        
        $chapter = $chapterId 
            ? $course->chapters->find($chapterId)
            : $course->chapters->first();

        $video = $videoId 
            ? $chapter->videos->find($videoId)
            : $chapter->videos->first(); 

        $reviews = Preview::with(['user'])->get();
        // dd($reviews->toArray());
        return view('Users.details-course', compact('course', 'chapter', 'video','reviews'));
    }

    public function video($id, $videoId){
        $videos = Video::where('course_id',$videoId)->find($videoId);
        $course = Courses::find($id);

        return view('Users.details-course',[
            'videos' => $videos,
            'course' => $course
        ]);
}
    // public function review($courseId){
    //     $courses = Courses::findOrFail($courseId);
    //     $review = Preview::all();
    //     dd($courses->toArray());
    //     return view('Users.details-course',compact('courses','review'));
    // }

    public function reviews(Request $request ,$course_id)
    {
        $data = $request->all(

        );
        $user = Auth::user()->id;
        // dd($data);
        $data['user_id'] = $user; 
        $data['course_id'] = $course_id;
        // dd($data);      
        // Preview::create([
            //     'user_id' => request('user_id'),
            //     'course_id' => request('course_id'),
            //     'content' => request('content'),
            
            // ]);
        Preview::create($data);
        return back();
    }
    public function reviewUpdate(Request $request, $id)
    {
        $data = $request->all();
        Preview::find($id)->update($data);
        return back();
    }

    public function detailCategory( $courseId = null )
    {
        $category = Category::with(['course'])->get()->first();
        // dd($category->toArray());
        $course = $courseId
        
        ? $category->course->find($courseId)
        
        : $category->course->first();
        // dd($course->toArray());
        return view('Users.category',compact('category','course'));
    }
}