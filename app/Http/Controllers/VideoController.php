<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Chapters;


class VideoController extends Controller
{
    public function create($id)
    {
        $chapter = Chapters::with('video')->where('id',$id)->get();        
        return view('Admin.Video.create',compact('chapter'));
    }
    
    public function createT($id)
    {
        $chapter = Chapters::with('video')->where('id',$id)->get();        
        return view('Teacher.Video.create',compact('chapter'));
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
        // dd($request);
        return redirect()->route('chapters', $request->chapters_id);

        
    }
    public function storeT(Request $request)
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
        // dd($request);
        return redirect()->route('teacher-chapters', $request->chapters_id);

        
    }

    public function edit($id,$chapters_id)
    {
        $video = Video::findOrFail($id);
        // $chapter = Chapters::with('video')->findOrNew($id)->first();
        $chapters = Chapters::find($chapters_id);
        // dd($chapters->toArray());
        $chapter = $id;
        return view('Admin.Video.edit',compact('video','chapter','chapters'));

    }
    public function editT($id,$chapters_id)
    {
        $video = Video::findOrFail($id);
        // $chapter = Chapters::with('video')->findOrNew($id)->first();
        $chapters = Chapters::find($chapters_id);
        // dd($chapters->toArray());
        $chapter = $id;
        return view('Teacher.Video.edit',compact('video','chapter','chapters'));

    }

    public function update(Request $request, $id)
    {
        $data = Video::find($id);
        $request->validate([
            'title' => 'required',
            'chapters_id' => 'required',
            'video' => 'required',
        ]);

        $data->update([
            'title' =>request('title'),
            'chapters_id' => request('chapters_id'),
            'video' => request('video'),
          
            ]);
            
            return redirect()->route('chapter.detail');
    }
    public function updateT(Request $request, $id)
    {
        $data = Video::find($id);
        $request->validate([
            'title' => 'required',
            'chapters_id' => 'required',
            'video' => 'required',
        ]);

        $data->update([
            'title' =>request('title'),
            'chapters_id' => request('chapters_id'),
            'video' => request('video'),
          
            ]);
            
            return redirect()->route('teacher-chapter.detail');
    }

    public function destroy($id)
    {
        $data = Video::find($id);
        // $chapters_id = $id;
        $data->delete();
        // dd($data->toArray());
        return redirect()->route('chapter.detail',);
    }
    public function destroyT($id)
    {
        $data = Video::find($id);
        // $chapters_id = $id;
        $data->delete();
        // dd($data->toArray());
        return redirect()->route('chapter.detail',);
    }
}