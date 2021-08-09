<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class SettingTeacher extends Controller
{
    public function Teacherindex()
    {
       
        $teachers = User::find(Auth()->user()->id);
        // dd($teachers->toArray());
        return view('Teacher.Setting.index',compact('teachers'));

    }

    public function Teachershow($id)
    {
        $teachers = User::find($id);
        return view('Admin.Teacher.details',compact('teachers'));       

    }

    public function Teacheredit($id)
    {
       
        $teachers = User::find(Auth()->user()->id)->first();
        // dd($teachers->toArray());
        return view('Teacher.Setting.edit',compact('teachers'));

    }

    public function Teacherupdate(Request $request, $id)
    {

        $teachers = User::findOrFail($id);
        if($request->password){
            $request->validate([
                'name' => 'required',
                'email' => 'required|min:8|max:25|email:rfc,dns|unique:users,email,'.$id,
                'password' => 'required|min:8|max:25|confirmed',
                'phone_number' => 'required',
                'title' => 'required',
                'image' => 'required',
                'address' => 'required',
                'achievement' => 'required',
           
            ]);

            $request->merge([
                'password' => Hash::make($request->password)
            ]);
        }else{
            $request->validate([
                'name' => 'required',
                'email' => 'required|min:8|max:25|email:rfc,dns',
            ]);

            $request['password'] = $teachers->password;
        }
       
        if($request->file('image_file') == null){
            $request->merge([
                'image' => $teachers->image
            ]);
        }else {
            $this->removeImage($teachers->image);
            $image_file = $this->uploadImage($request->image_file);
            $request->merge([
                'image' => $image_file
            ]);
        }
   

        $teachers->update($request->all());
        return redirect()->route('Teacher-setting');
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
