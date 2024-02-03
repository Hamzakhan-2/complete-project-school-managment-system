<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Parents;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parent= Parents::all();
        $student= Student::paginate(3);

        return view('student.create',compact('student','parent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
     $student=new Student();
        $student->parent_id=$request->parent_id;
        $student->name=$request->name;
        $student->admission_number=$request->admission_number;
        $student->roll_number=$request->roll_number;
        $student->class=$request->class;
        $student->gender=$request->gender;
        $student->mobile_number=$request->mobile_number;
        $student->admission_date=$request->admission_date;
        $student->blood_group=$request->blood_group;
        $student->status=$request->status;
        $student->email=$request->email;
        $student->age=$request->age;

        if ($request->hasFile('profile_picture'))
        {
            $image = $request->file('profile_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $student->profile_picture = 'images/' . $imageName;
        }
        $student->save();
         return redirect()->back();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        return back();


    }
}
