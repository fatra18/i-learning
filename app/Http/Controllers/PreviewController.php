<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreviewController extends Controller
{
    public function preview()
    {
        return view('Student.Preview.index');
    }
}
