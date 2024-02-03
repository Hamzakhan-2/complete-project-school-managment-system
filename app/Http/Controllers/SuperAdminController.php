<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function SuperAdmin()
    {
        // $student=Student::all();
        
        return view('admin.dashboard');
    }
}
