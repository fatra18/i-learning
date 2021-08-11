<?php

namespace App\Http\Controllers;

use App\Models\Preview;
use App\Models\User;
use Illuminate\Http\Request;

class PreviewController extends Controller
{
    public function index()
    {
        $reviews = Preview::get();
        $users = User::find(auth()->user()->id);

        // dd($users->toArray());
        return view('Student.Preview.index',compact('reviews','users'));
        
    }

    public function create()
    {
        $preview = Preview::get();
        $users = User::find(auth()->user()->id);
        return view('Student.Preview.index',compact('preview','users'));

    }
}
