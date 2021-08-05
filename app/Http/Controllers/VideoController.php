<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Chapters;


class VideoController extends Controller
{
    public function create()
    {
        $video = Video::get();
        $chapters = Chapters::all();
        return view('Admin.Video.create',compact('video','chapters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video' => 'required',
            'chapters_id' => 'required',

        ]);

        Video::create(([
        'title' => request('title'),
        'video' => request('video'),
        'chapters_id' => request('chapters_id'),
        ]));
        return redirect()->route('chapters');
    }
}