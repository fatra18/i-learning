<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/', function () {
        return view('Admin.Dashboard');
    })->name('dashboard');
    
    // Course Url
    Route::get('/courses', function () {
        return view('Admin.Course.index');
    })->name('courses');
    
    Route::get('/courses/create', function () {
        return view('Admin.Course.create');
    })->name('courses/create');
    
    Route::get('/courses/edit', function () {
        return view('Admin.Course.edit');
    })->name('courses/edit');;
    
    // Chapter Url
    Route::get('/chapters', function () {
        return view('Admin.Chapter.index');
    })->name('chapters');;
    
    Route::get('/chapters/create', function () {
        return view('Admin.Chapter.create');
    })->name('chapters/create');
    
    Route::get('/chapters/edit', function () {
        return view('Admin.Chapter.edit');
    })->name('chapters/edit');;
    
    Route::get('/chapters/details', function () {
        return view('Admin.Chapter.details');
    })->name('chapters/details');;
    
    Route::get('/chapters/video/create', function () {
        return view('Admin.Chapter.video-create');
    })->name('video/create');;
    
    Route::get('/chapters/video/edit', function () {
        return view('Admin.Chapter.video-edit');
    })->name('video/edit');;

    // Category Url
    Route::get('/category/index',function(){
        return view('Admin.Category.index');
    })->name('category');
    
    Route::get('/category/create',function(){
        return view('Admin.Category.create');
    })->name('category/create');
    
    Route::get('/category/edit',function(){
        return view('Admin.Category.edit');
    })->name('category/edit');;
    
    // Teacher Url
    Route::get('/teacher',function(){
        return view('Admin.Teacher.index');
    })->name('teacher');;
    
    Route::get('/teacher/create',function(){
        return view('Admin.Teacher.create');
    })->name('teacher/create');
    
    Route::get('/teacher/edit',function(){
        return view('Admin.Teacher.edit');
    })->name('teacher/edit');
    
    Route::get('/teacher/details',function(){
        return view('Admin.Teacher.details');
    })->name('teacher/detail');;
    
    // Student Url
    Route::get('/student',function(){
        return view('Admin.Student.index');
    })->name('student');
    
    Route::get('/student/create',function(){
        return view('Admin.Student.create');
    })->name('student/create');
    
    Route::get('/student/edit',function(){
        return view('Admin.Student.edit');
    })->name('student/edit');
    
    Route::get('/student/details',function(){
        return view('Admin.Student.details');
    })->name('student/detail');
    
    // Article Url
    Route::get('/article',function(){
        return view('Admin.Article.index');
    })->name('article');
    
    Route::get('/article/create',function(){
        return view('Admin.Article.create');
    })->name('article/create');
    
    Route::get('/article/edit',function(){
        return view('Admin.Article.edit');
    })->name('article/edit');;
    
    Route::get('/article/detail',function(){
        return view('Admin.Article.detail');
    })->name('article/detail');;
    
    // Preview Url
    Route::get('/preview',function(){
        return view('Admin.Preview.index');
    })->name('preview');;



});
Route::prefix('/teacher')->group(function(){
    Route::get('/', function () {
        return view('Teacher.Dashboard');
    });
    
    // Course Url
    Route::get('/courses', function () {
        return view('Teacher.Course.index');
    });
    Route::get('/courses/create', function () {
        return view('Teacher.Course.create');
    });
    Route::get('/courses/edit', function () {
        return view('Teacher.Course.create');
    });
    
    // Chapter Url
    Route::get('/chapters', function () {
        return view('Teacher.Chapter.index');
    });
    Route::get('/chapters/create', function () {
        return view('Teacher.Chapter.create');
    });
    Route::get('/chapters/edit', function () {
        return view('Teacher.Chapter.edit');
    });
    Route::get('/chapters/details', function () {
        return view('Teacher.Chapter.details');
    });
    Route::get('/chapters/video/create', function () {
        return view('Teacher.Chapter.video-create');
    });
    Route::get('/chapters/video/edit', function () {
        return view('Teacher.Chapter.video-edit');
    });

    // Category Url
    Route::get('/category/index',function(){
        return view('Teacher.Category.index');
    });
    Route::get('/category/create',function(){
        return view('Teacher.Category.create');
    });
    Route::get('/category/edit',function(){
        return view('Teacher.Category.edit');
    });
    
    // Student Url
    Route::get('/student',function(){
        return view('Teacher.Student.index');
    });
    Route::get('/student/create',function(){
        return view('Teacher.Student.create');
    });
    Route::get('/student/edit',function(){
        return view('Teacher.Student.edit');
    });
    Route::get('/student/details',function(){
        return view('Teacher.Student.details');
    });
    
    // Article Url
    Route::get('/article',function(){
        return view('Teacher.Article.index');
    });
    Route::get('/article/create',function(){
        return view('Teacher.Article.create');
    });
    Route::get('/article/edit',function(){
        return view('Teacher.Article.edit');
    });
    Route::get('/article/detail',function(){
        return view('Teacher.Article.detail');
    });
    
    // Preview Url
    Route::get('/preview',function(){
        return view('Teacher.Preview.index');
    });



});


Route::get('/dashboard-teachers', function () {
    return view('Teacher.Dashboard');
});

Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('Users.home');
    })->name('home');;
    
    Route::get('login', function () {
        return view('Users.login');
    })->name('login');
     
    Route::get('register', function () {
        return view('Users.register');
    })->name('register');
     
    Route::get('category', function () {
        return view('Users.category');
    })->name('category-pages');
     
    Route::get('article', function () {
        return view('Users.article');
    })->name('article-details');
     
    Route::get('teachers', function () {
        return view('Users.teachers');
    })->name('teacher-details');
     
    Route::get('setting', function () {
        return view('Users.setting');
    });
    
    Route::get('/details-course', function () {
        return view('Users.details-course');
    })->name('course-details');
});