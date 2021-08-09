<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Courses::with('user','category')->get();
        return view('Admin.Course.index',compact('courses'));
    }
    
    public function Teacher()
    {
        $courses1 = Courses::with('user','category')->get();
        return view('Teacher.Course.index',compact('courses1'));
    }
    
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Courses::get();
        $users = User::find(auth()->user()->id);
        $categories = Category::all();
        return view('Admin.Course.create',compact('courses','users','categories'));
    }
    public function createT()
    {
        $courses = Courses::get();
        $users = User::find(auth()->user()->id);
        $categories = Category::all();
        return view('Teacher.Course.create',compact('courses','users','categories'));
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_file = $this->uploadImage($request->file('image_file'));
        $request->merge([
            'image' => $image_file
        ]);
        $request['image'] = $image_file;

        $request = $request->all();
        $request['image'] = $image_file;
        Courses::create([
            'user_id' => request('user_id'),
            'category_id' => request('category_id'),
            'name' => request('name'),
            'description' => request('description'),
            'image' => request('image'),
        ]);
        return redirect()->route('courses');
    }
    public function storeT(Request $request)
    {
        $image_file = $this->uploadImage($request->file('image_file'));
        $request->merge([
            'image' => $image_file
        ]);
        $request['image'] = $image_file;

        $request = $request->all();
        $request['image'] = $image_file;
        Courses::create([
            'user_id' => request('user_id'),
            'category_id' => request('category_id'),
            'name' => request('name'),
            'description' => request('description'),
            'image' => request('image'),
        ]);
        return redirect()->route('teacher-courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Courses::with('chapters')->first();
        dd($data->toArray());
        // return view('Admin.Chapter.index',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$user_id)
    {
      $categories = Category::all();
      $users = User::find($user_id);
    //   dd($user_id);
      $courses = Courses::findOrFail($id);
    //   dd($users->toArray());
        
      return view('Admin.Course.edit',compact('categories','users','courses'));
    }
    
    public function editT($id,$user_id)
    {
      $categories = Category::all();
      $users = User::find($user_id);
    //   dd($user_id);
      $courses = Courses::findOrFail($id);
    //   dd($users->toArray());
        
      return view('Teacher.Course.edit',compact('categories','users','courses'));
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
        $courses = Courses::find($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);
        
        if($request->file('image_file') == null){
            $request->merge([
                'image' => $courses->image
            ]);
        }else {
            $this->removeImage($courses->image);
            $image_file = $this->uploadImage($request->file('image_file'));
            // dd($image_file);
            $request->merge([
                'image' => $image_file
            ]);

        }
        $courses->update([
        'user_id' => request('user_id'),
        'category_id' => request('category_id'),
        'name' => request('name'),
        'description' => request('description'),
        'image' => request('image'),
        ]);

        return redirect()->route('courses');
    }
    public function updateT(Request $request, $id)
    {
        $courses = Courses::find($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);
        
        if($request->file('image_file') == null){
            $request->merge([
                'image' => $courses->image
            ]);
        }else {
            $this->removeImage($courses->image);
            $image_file = $this->uploadImage($request->file('image_file'));
            // dd($image_file);
            $request->merge([
                'image' => $image_file
            ]);

        }
        $courses->update([
        'user_id' => request('user_id'),
        'category_id' => request('category_id'),
        'name' => request('name'),
        'description' => request('description'),
        'image' => request('image'),
        ]);

        return redirect()->route('teacher-courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = Courses::findOrFail($id);
        $this->removeImage($courses->image);
        $courses->delete();
        return back();

        return redirect()->route('courses');
        
    }
    
    public function destroyT($id)
    {
        $courses = Courses::findOrFail($id);
        $this->removeImage($courses->image);
        $courses->delete();
        return back();

        return redirect()->route('teacher-courses');
        
    }

    
    
    public function uploadImage($image)
        {
        // $image = $request->file('image_file');
        $new_name_image = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('profile'),$new_name_image);
        return $new_name_image;
        }

        public function removeImage($image)
        {
            if (file_exists('profile/'.$image)){

                unlink('profile/'.$image);
            }
        }

}
