<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Auth::user()->role;
        
        if($role == 'Teacher'){
            return view('Admin.Teacher.index',compact('role'));

        }
        if($role == 'Student'){
            return view('Admin.Student.index',compact('role'));

        }
        

        
    }

    public function showTeacher()
    {
        $teachers = User::where('role','Teacher')->get();
        return view('Admin.Teacher.index',compact('teachers'));
    }
    
    public function showStudent()
    {
        $students = User::where('role','Student')->get();
        return view('Admin.Student.index',compact('students'));
    }
        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Teachercreate()
    {
        return view('Admin.Teacher.create');
    }
    
    public function Studentcreate()
    {
        return view('Admin.Student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Teacherstore(Request $request)
    {
        
        $image_file = $this->uploadImage($request->file('image_file'));
             
        User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'phone_number' => $request->phone_number,
        'title' => $request->title,
        'address' => $request->address,
        'image' =>$image_file,
        'achievement' => $request->achievement,
        'role' => $request->role,
        ]);
       
        return redirect()->route('teacher.index');
    }
    public function Studentstore(Request $request)
    {
        
        $image_file = $this->uploadImage($request->file('image_file'));
             
        User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'phone_number' => $request->phone_number,
        'title' => $request->title,
        'address' => $request->address,
        'image' =>$image_file,
        'achievement' => $request->achievement,
        'role' => $request->role,
        ]);
       
        return redirect()->route('student.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Teachershow($id)
    {
        $teachers = User::find($id);
        return view('Admin.Teacher.details',compact('teachers'));       

    }
    public function Studentshow($id)
    {
        $students = User::find($id);
        return view('Admin.Student.details',compact('students'));       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Teacheredit($id)
    {
        $teachers = User::findOrFail($id);
        return view('Admin.Teacher.edit',compact('teachers'));
    }
    public function Studentedit($id)
    {
        $students = User::find($id);
        return view('Users.setting',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        return redirect()->route('teacher.index');
    }
    public function Studentupdate(Request $request, $id)
    {

        $students = User::findOrFail($id);
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
   

        $students->update($request->all());
        return redirect()->route('setting');
    }
    
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function Teacherdestroy($id)
    {
        $teachers = User::findOrFail($id);
        $this->removeImage($teachers->image);
        $teachers->delete();
        return back();

        return redirect()->route('teacher.index');
    }
    
    public function Studentdestroy($id)
    {
        $students = User::findOrFail($id);
        $this->removeImage($students->image);
        $students->delete();
        return back();

        return redirect()->route('student.index');
    }

    public function uploadImage($image)
    {
        // $image = $request->file('image_file');
        $new_name_image =time() . '.'. $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        return $new_name_image;

    }
        
    // }
    // public function uploudImage($image)
    // {
    // // $image = $request->file('image_file');
    // $new_name_image = time() . '.' . $image->getClientOriginalExtension();
    // $image->move(public_path('profile'),$new_name_image);
    // return $new_name_image;
    // }

    public function removeImage($image)
    {
        if (file_exists('profile/'.$image)){

            // unlink('profile/'.$image);
        }
    }
}
