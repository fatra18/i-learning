<?php

namespace App\Http\Controllers;

use App\Models\Chapters;
use App\Models\Courses;
use App\Models\Video;
use Illuminate\Http\Request;

class ChaptersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapters = Chapters::with('course')->get();
        // dd($chapters->toArray());
        return view('Admin.Chapter.index',compact('chapters'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Courses::all();
        $chapters = Chapters::all();
        return view('Admin.Chapter.create',compact('courses','chapters'));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'course_id' => 'required',
            'description' => 'required',

        ]);

        Chapters::create(([
        'name' => request('name'),
        'course_id' => request('course_id'),
        'description' => request('description'),
        ]));
        return redirect()->route('chapters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Chapters::find($id);
        $video = Video::all();
        // dd($video->toArray());
        return view('Admin.Chapter.details',compact('data','video'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Courses::all();
        $chapters = Chapters::findOrFail($id);

        return view('Admin.Chapter.edit',compact('courses','chapters'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Chapters::find($id);
        $request->validate([
            'name' => 'required',
            'courses_id' => 'required',
            'description' => 'required',
        ]);

        $data->update([
            'name' => request('name'),
            'description' => request('description'),
            'courses_id' => request('courses_id'),
          
            ]);
            
            return redirect()->route('chapters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Chapters::find($id);
        $data->delete();

        return redirect()->route('chapters');
    }
}
