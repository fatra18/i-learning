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
    public function index($id)
    {
        $chapters = Chapters::with('course')->where('course_id', $id)->get();
        // dd($chapters->toArray());
        $chapter_id = $id;
        $course_id = $id;
        return view('Admin.Chapter.index',compact('chapters', 'course_id','chapter_id'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $courses = Courses::findOrFail($id);
        return view('Admin.Chapter.create',compact('courses'));



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
        'id' => request('id'),
        'name' => request('name'),
        'course_id' => request('course_id'),
        'description' => request('description'),
        ]));
        return redirect()->route('chapters',$request->course_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Chapters::with('video')->findOrFail($id);
        // $video = Video::all();
        // dd($data->toArray());
        return view('Admin.Chapter.details',compact('data'));  
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
            'id' =>request('id'),
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
