<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class SettingStudent extends Controller
{
    public function Studentindex()
    {
       
        $students = User::find(Auth()->user()->id);
        // dd($students->toArray());
        return view('Student.Setting.index',compact('students'));

    }
    public function Studenthow($id)
    {
        $students = User::find($id);
        return view('Admin.Teacher.details',compact('students'));       

    }

    public function Studentedit($id)
    {
       
        $students = User::find(Auth()->user()->id);
        // dd($students->toArray());
        // dd($students->toArray());
        return view('Student.Setting.edit',compact('students'));

    }

    public function Studentupdate(Request $request, $id)
    {

        $students = User::findOrFail($id);
        // dd($students->toArray());
        if($request->password){
            $request->validate([
                'name' => 'required',
                'email' => 'required'.$id,
                'password' => 'required|min:8|max:25|confirmed',
                'phone_number' => 'required',
                'title' => 'required',
                'image' => 'required',
                'address' => 'required',
                'achievement' => 'required',
                'description' => 'required',
           
            ]);
            dd($request->toArray());
            $request->merge([
                'password' => Hash::make($request->password)
            ]);
        }else{
            $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);

            $request['password'] = $students->password;
        }
       
        if($request->file('image_file') == null){
            $request->merge([
                'image' => $students->image
            ]);
        }else {
            $this->removeImage($students->image);
            $image_file = $this->uploadImage($request->image_file);
            $request->merge([
                'image' => $image_file
            ]);
        }
   
        // dd($students->toArray());
        $students->update($request->all());
        return redirect()->route('Student-setting');
    }
    public function uploadImage($image)
    {
        // $image = $request->file('image_file');
        $new_name_image =time() . '.'. $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        return $new_name_image;

    }
        
 

    public function removeImage($image)
    {
        if (file_exists('profile/'.$image)){

            // unlink('profile/'.$image);
        }
    }
}

