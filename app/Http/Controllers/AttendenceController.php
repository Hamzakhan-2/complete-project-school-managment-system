<?php

namespace App\Http\Controllers;
use App\Models\Attendence;
use App\Models\Parents;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function CreateAttendence()
    {
       $parent=Parents::all();
       $teacher=Teacher::all();
        $attendence=Attendence::all();
       return view('attendence.create',compact('attendence','parent','teacher'));

    }
    public function AddAttendence(Request $request)
    {

        $request->validate([

            'date'=>'required',
            'time'=>'required',
            'reqularity'=>'required',
            'othermetrics'=>'required',

        ]);

        $attendence=new Attendence;
        $attendence->parent_id=$request->parent_id;
        $attendence->teacher_id=$request->teacher_id;
        $attendence->date=$request->date;
        $attendence->time=$request->time;
        $attendence->reqularity=$request->reqularity;
        $attendence->othermetrics=$request->othermetrics;
        $attendence->save();
        return redirect()->back();
    }
    public function destroy($id)
    {

        Attendence::destroy($id);
        return back();
    }




}
