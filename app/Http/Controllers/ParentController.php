<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parents;
use App\Models\Student;
use App\Models\Attendence;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
class ParentController extends Controller
{
    public function index()
    {
        $parents= Parents::paginate(1);
        return view('parent.create',compact('parents'));
    }

    public function create(Request $request){


        $parent=new Parents;
        $parent->name=$request->name;
        $parent->email=$request->email;
        $parent->password=$request->password;
        $parent->phoneno=$request->phoneno;
        $parent->address=$request->address;
        $parent->gender=$request->gender;
        $parent->status=$request->status;
        $parent->occupation=$request->occupation;

        if ($request->hasFile('profile_picture'))
        {
            $image = $request->file('profile_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $parent->profile_picture = 'images/' . $imageName;
        }
        $parent->save();
        return redirect()->back()->with('success', 'Parent Add successfully');;
    }
    public function destroy($id){

        Parents::destroy($id);
        return redirect()->back()->with('success', 'Parent deleted successfully');
    }
//this code for my student when parent see his own student
     public function Student($id)
{

 $student = Student::where('parent_id', $id)->get();
 return view('Parent.mystudent', compact('student'));

}

    //this code for parents lock and unlocked

    public function lock($id)
{
    $parent =Parents::find($id);
    $parent->status = 0;
    $parent->save();

    return redirect()->back();
}

public function unlock($id)
{
    $parent =Parents::find($id);
    $parent->status = 1;
    $parent->save();

    return redirect()->back();
}




    public function parentlogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    //this code for user side show students dashboard
    public function CreateUser()
{
    $student=Student::all();
    return view('userside.usersideusr',compact('student'));
}
//this code for user side show teachers parent dashboard
public function UserTeacher()
{
    $teacher=Teacher::all();
    return view('userside.usersideteachers',compact('teacher'));
}
//this code for show attendence
public function UserAttendence()
{
    $attendence=Attendence::all();
    return view('userside.usersideattendence',compact('attendence'));
}

    }




