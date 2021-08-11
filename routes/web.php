<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChaptersController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailTeacherController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\SettingTeacher;
use App\Http\Controllers\SettingStudent;
use App\Models\Article;
use App\Models\Courses;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/admin')->group(function(){
    Route::get('/',[DashboardController::class,'Admin'])->name('Admin-dashboard');
    // Route::get('/',[DashboardController::class,'Student'])->name('Admin-dashboard');
   
    // Category Url
    Route::get('/category/index',[CategoryController::class,'index'])->name('category');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/create',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::delete('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');

    // Teacher Url
    Route::get('/teacher',[UserController::class,'showTeacher'])->name('teacher.index');
    Route::get('/teacher/create',[UserController::class,'Teachercreate'])->name('teacher.create');
    Route::post('/teacher/create',[UserController::class,'Teacherstore'])->name('teacher.store');
    Route::get('/teacher/edit/{id}',[UserController::class,'Teacheredit'])->name('teacher.edit');
    Route::put('/teacher/edit/{id}',[UserController::class,'Teacherupdate'])->name('teacher.update');
    Route::delete('/teacher/delete/{id}',[UserController::class,'Teacherdestroy'])->name('teacher.delete');
    Route::get('/teacher/show/{id}',[UserController::class,'Teachershow'])->name('teacher.detail');
    
    // Student Url
    Route::get('/student',[UserController::class,'showStudent'])->name('student.index');
    // Route::get('/student/create',[UserController::class,'Studentcreate'])->name('student.create');
    // Route::post('/student/create',[UserController::class,'Studentstore'])->name('student.store');
    // Route::get('/student/edit/{id}',[UserController::class,'Studentedit'])->name('student.edit');
    // Route::put('/student/edit/{id}',[UserController::class,'Studentupdate'])->name('student.update');
    Route::delete('/student/delete/{id}',[UserController::class,'Studentdestroy'])->name('student.delete');
    Route::get('/student/show/{id}',[UserController::class,'Studentshow'])->name('student.detail');
    Route::get('setting',[UserController::class,'index'])->name('setting');
    Route::get('setting/edit',[UserController::class,'Studentedit'])->name('setting.edit');
    Route::get('setting/create',[UserController::class,'Studentcreate'])->name('setting.create');
    Route::post('setting/create',[UserController::class,'Studentstore'])->name('setting.store');

    

    // Article Url
    Route::get('/article',[ArticleController::class,'index'])->name('articles');
    Route::get('/articles/create',[ArticleController::class,'create'])->name('articles.create');
    Route::post('/articles/store',[ArticleController::class,'store'])->name('articles.store');
    Route::get('/articles/show/{id}',[ArticleController::class,'show'])->name('articles.show');
    Route::get('/articles/edit/{id}',[ArticleController::class,'edit'])->name('articles.edit');
    Route::put('/articles/update/{id}',[ArticleController::class,'update'])->name('articles.update');
    Route::delete('/articles/delete/{id}',[ArticleController::class,'destroy'])->name('articles.delete');

    
    // Courses
    Route::get('courses',[CoursesController::class,'index'])->name('courses');
    Route::get('/courses/create/{id}',[CoursesController::class,'create'])->name('courses.create');
    Route::post('/courses/create',[CoursesController::class,'store'])->name('courses.store');
    Route::get('/courses/edit/{id}/{user_id}',[CoursesController::class,'edit'])->name('courses.edit');
    Route::put('/courses/update/{id}',[CoursesController::class,'update'])->name('courses.update');
    Route::delete('/courses/delete/{id}',[CoursesController::class,'destroy'])->name('courses.delete');

    // Chapters
    Route::get('chapters/{id}',[ChaptersController::class,'index'])->name('chapters');
    Route::get('/chapters/create/{id}',[ChaptersController::class,'create'])->name('chapter.create');
    Route::post('/chapters/create',[ChaptersController::class,'store'])->name('chapter.store');
    Route::get('/chapters/edit/{id}',[ChaptersController::class,'edit'])->name('chapter.edit');
    Route::get('/chapters/show/{id}/{chapters_id}',[ChaptersController::class,'show'])->name('chapter.detail');
    Route::put('/chapters/update/{id}',[ChaptersController::class,'update'])->name('chapter.update');
    Route::delete('/chapters/delete/{id}',[ChaptersController::class,'destroy'])->name('chapter.delete');

    // Video
    Route::get('/video/create/{id}/{course_id}',[VideoController::class,'create'])->name('video.create');
    Route::post('/video/create',[VideoController::class,'store'])->name('video.store');
    Route::get('/video/edit/{id}/{chapters_id}',[VideoController::class,'edit'])->name('video.edit');
    Route::put('/video/update/{id}',[VideoController::class,'update'])->name('video.update');
    Route::delete('/video/delete/{id}',[VideoController::class,'destroy'])->name('video.delete');

    // Preview Url
    Route::get('/preview',function(){
        return view('Admin.Preview.index');
    })->name('preview');;



});



// Route::get('/dashboard-teachers', function () {
//     return view('Teacher.Dashboard');
// });
Route::prefix('/Teacher')->group(function(){
    Route::get('/',[DashboardController::class,'Teacher'])->name('Teacher-dashboard');
    Route::get('/setting',[SettingTeacher::class,'Teacherindex'])->name('Teacher-setting');
    Route::get('/setting/edit/{id}',[SettingTeacher::class,'Teacheredit'])->name('Teacher-setting-edit');
    Route::put('/setting/update/{id}',[SettingTeacher::class,'Teacherupdate'])->name('Teacher-setting-update');
    Route::get('/setting/show/{id}',[SettingTeacher::class,'Teachershow'])->name('Teacher-setting-show');
    
    // Course Teacher
    Route::get('courses/teacher',[CoursesController::class,'Teacher'])->name('teacher-courses');
    Route::get('/courses/create/{id}',[CoursesController::class,'createT'])->name('teacher-courses.create');
    Route::post('/courses/create',[CoursesController::class,'storeT'])->name('teacher-courses.store');
    Route::get('/courses/edit/{id}/{user_id}',[CoursesController::class,'editT'])->name('teacher-courses.edit');
    Route::put('/courses/update/{id}',[CoursesController::class,'updateT'])->name('teacher-courses.update');
    Route::delete('/courses/delete/{id}',[CoursesController::class,'destroyT'])->name('teacher-courses.delete');

    // Chapters Teacher
    Route::get('chapters/{id}',[ChaptersController::class,'Teacher'])->name('teacher-chapters');
    Route::get('/chapters/create/{id}',[ChaptersController::class,'createT'])->name('teacher-chapter.create');
    Route::post('/chapters/create',[ChaptersController::class,'storeT'])->name('teacher-chapter.store');
    Route::get('/chapters/edit/{id}',[ChaptersController::class,'editT'])->name('teacher-chapter.edit');
    Route::get('/chapters/show/{id}/{chapters_id}',[ChaptersController::class,'showT'])->name('teacher-chapter.detail');
    Route::put('/chapters/update/{id}',[ChaptersController::class,'updateT'])->name('teacher-chapter.update');
    Route::delete('/chapters/delete/{id}',[ChaptersController::class,'destroyT'])->name('teacher-chapter.delete');

    // Video
    Route::get('/video/create/{id}',[VideoController::class,'createT'])->name('teacher-video.create');
    Route::post('/video/create',[VideoController::class,'storeT'])->name('teacher-video.store');
    Route::get('/video/edit/{id}/{chapters_id}',[VideoController::class,'editT'])->name('teacher-video.edit');
    Route::put('/video/update/{id}',[VideoController::class,'updateT'])->name('teacher-video.update');
    Route::delete('/video/delete/{id}',[VideoController::class,'destroyT'])->name('teacher-video.delete');
});

Route::prefix('Student')->group(function(){
    Route::get('/setting',[SettingStudent::class,'Studentindex'])->name('Student-setting');
    Route::get('/setting/edit/{id}',[SettingStudent::class,'Studentedit'])->name('Student-setting-edit');
    Route::put('/setting/update/{id}',[SettingStudent::class,'Studentupdate'])->name('Student-setting-update');
    Route::get('/setting/show/{id}',[SettingStudent::class,'Studentshow'])->name('Student-setting-show');
    Route::get('preview',[PreviewController::class,'index'])->name('student-preview');
    Route::get('preview/create',[PreviewController::class,'create'])->name('student-preview');
});

Route::prefix('/')->group(function () {
    // Route::get('{id}/{article_id}',[PageController::class,'index'])->name('home');
    Route::get('/details/teachers/{id}',[PageController::class,'detailTeacher'])->name('details-teachers');
    Route::get('/details/articles/{id}',[PageController::class,'detailArticle'])->name('details-article');
    // Route::get('courses',[CoursesController::class,'index1'])->name('courses');
    // Route::get('/courses/create',[CoursesController::class,'create1'])->name('courses.create');

    Route::get('class-detail/{id}',[ClassController::class,'detail'])->name('class.detail');
    Route::get('/class/video/{classid}/{videoid}', [ClassController::class, 'chapter_gallery'])->name('classes.chapter');

    
    
    
    
    
    
    
    
    
    
    
    
    Route::get('user/login', function () {
        return view('Users.login');
    })->name('login');
     
    Route::get('register', function () {
        return view('Users.register');
    })->name('register');
     
    // Route::get('category', function () {
    //     return view('Users.category');
    // })->name('category-pages');
     
    Route::get('article', function () {
        return view('Users.article');
    })->name('article-details');
     
    Route::get('teachers', function () {
        return view('Users.teachers');
    })->name('teacher-details');
     
    // Route::get('setting', function () {
    //     return view('Users.setting');
    // })->name('setting');
   
    
    // Route::get('/details-course', function () {
    //     return view('Users.details-course');
    // })->name('course-details');
});


Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('home/{category?}',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('category/{category?}/{course?}',[App\Http\Controllers\HomeController::class, 'detailCategory'])->name('details-category');
Route::get('articles/{id}',[App\Http\Controllers\HomeController::class, 'detailArticle'])->name('details');
Route::get('details/{course_id}/{chapter_id?}/{video_id?}',[App\Http\Controllers\HomeController::class, 'detailCourse'])->name('details-course');
Route::post('preview/{course_id}/{id?}',[App\Http\Controllers\HomeController::class,'reviews'])->name('review');
Route::post('preview/{id}',[App\Http\Controllers\HomeController::class,'reviewsUpdate'])->name('review-update');
// Auth


 

Auth::routes();

Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login-process',[AuthController::class,'loginProcess'])->name('login-process');
Route::post('logout',[AuthController::class,'logout'])->name('logout');
// Route::post('dashboard',[AuthController::class,'dashboard'])->name('dashboard');

 // Course Url
    // Route::get('/courses', function () {
    //     return view('Admin.Course.index');
    // })->name('courses');
    
    // Route::get('/courses/create', function () {
    //     return view('Admin.Course.create');
    // })->name('courses/create');
    
    // Route::get('/courses/edit', function () {
    //     return view('Admin.Course.edit');
    // })->name('courses/edit');;
    
    // // Chapter Url
    // Route::get('/chapters', function () {
    //     return view('Admin.Chapter.index');
    // })->name('chapters');;
    
    // Route::get('/chapters/create', function () {
    //     return view('Admin.Chapter.create');
    // })->name('chapters/create');
    
    // Route::get('/chapters/edit', function () {
    //     return view('Admin.Chapter.edit');
    // })->name('chapters/edit');;
    
    // Route::get('/chapters/details', function () {
    //     return view('Admin.Chapter.details');
    // })->name('chapters/details');;
    
    // Route::get('/chapters/video/create', function () {
    //     return view('Admin.Chapter.video-create');
    // })->name('video/create');;
    
    // Route::get('/chapters/video/edit', function () {
    //     return view('Admin.Chapter.video-edit');
    // })->name('video/edit');;
