<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('user','category')->get();
        // dd($articles->toArray());
        return view('Admin.Article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::get();
        $users = User::where('role','Admin')->get();
        $categories = Category::all();
        return view('Admin.Article.create',compact('users','categories','articles'));
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
        // dd($request->image);
        Article::create(([
        'user_id' => request('user_id'),
        'category_id' => request('category_id'),
        'title' => request('title'),
        'content' => request('content'),
        'image' => request('image'),
        ]));
        return redirect()->route('articles')->with('sukses-store','Data berhasil');
        return redirect()->route('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Article::find($id);
     
        return view('Admin.Article.detail',compact('data'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $users = User::all();
        $article = Article::findOrFail($id);
        return view('Admin.Article.edit',compact('categories','users','article'));
        
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
        $data = Article::find($id);
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);
        
        if($request->file('image_file') == null){
            $request->merge([
                'image' => $data->image
            ]);
        }else {
            $this->removeImage($data->image);
            $image_file = $this->uploadImage($request->file('image_file'));
            // dd($image_file);
            $request->merge([
                'image' => $image_file
            ]);

        }
        $data->update([
        'user_id' => request('user_id'),
        'category_id' => request('category_id'),
        'title' => request('title'),
        'content' => request('content'),
        'image' => request('image'),
        ]);
        return redirect()->route('articles');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles = Article::findOrFail($id);
        $this->removeImage($articles->image);
        $articles->delete();
        return back();

        return redirect()->route('articles');
        
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
