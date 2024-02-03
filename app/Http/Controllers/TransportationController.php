<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportation;
use App\Models\Parents;
use App\Models\Student;
class TransportationController extends Controller
{
    public function CreateTransportation()
    {
        $parent=Parents::all();
        $student=Student::all();
        $trans=Transportation::all();
        return view('Transportation.create',compact('trans','parent','student'));
    }
    public function AddTransportation(Request $request)
    {
        $request->validate([
            'bus_number'=>'required',
            'location'=>'required',
            'detail'=>'required'


        ]);

        $trans= new Transportation;
        $trans->parent_id=$request->parent_id;
        $trans->student_id=$request->student_id;
        $trans->bus_number=$request->bus_number;
        $trans->location=$request->location;
        $trans->detail=$request->detail;
        $trans->save();
        return redirect()->back();


    }
    public function destroy($id)
{
    Transportation::destroy($id);
    return back();
}

}
