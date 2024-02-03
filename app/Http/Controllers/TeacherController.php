<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class TeacherController extends Controller
{
    //
    public function index(){
        $teacher=Teacher::paginate(3);
        return view('teacher.create',compact('teacher'));

    }

    public function create(Request $request)
    {

        $teacher= new Teacher;
        $teacher->name=$request->name;
        $teacher->email=$request->email;
        $teacher->gender=$request->gender;
        $teacher->password=$request->password;
        $teacher->date_of_joining=$request->date_of_joining;
        $teacher->phone_number=$request->phone_number;
        $teacher->address=$request->address;
        $teacher->work_experience=$request->work_experience;
        $teacher->qualification=$request->qualification;
        $teacher->status=$request->status;

        if ($request->hasFile('profile_picture'))
        {
            $image = $request->file('profile_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $teacher->profile_picture = 'images/' . $imageName;
        }
        $teacher->save();
        return redirect()->back();
    }

    public function destroy($id)
    {

        Teacher::destroy($id);
        return redirect()->back();
    }


}
