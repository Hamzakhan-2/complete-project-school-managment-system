<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestMeeting;
use App\Models\Parents;
use App\Models\Teacher;

class RequestMeetingController extends Controller
{
    public function CreateMeeting(){
        $parent=Parents::all();
        $teacher=Teacher::all();
       $meeting= RequestMeeting::all();
        return view('request_meeting.create_meeting',compact('meeting','parent','teacher'));
    }

    public function AddMeeting(Request $request)
    {


        $request->validate([
            'meeting_date'=>'required',
            'meeting_start_time'=>'required',
            'meeting_end_time'=>'required',
            'purpose'=>'required',
            'status'=>'required',

        ]);
        RequestMeeting::create([
            'parent_id'=>$request->parent_id,
            'teacher_id'=>$request->teacher_id,
            'meeting_date'=>$request->meeting_date,
            'meeting_start_time'=>$request->meeting_start_time,
            'meeting_end_time'=>$request->meeting_end_time,
            'purpose'=>$request->purpose,
            'status'=>$request->status,

        ]);
        return redirect()->back();
     }
     public function destroy($id)
     {
           RequestMeeting::destroy($id);
           return back();

     }

}

