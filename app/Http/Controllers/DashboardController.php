<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dasboard;
use App\Models\Student;
use App\Models\Attendence;
use App\Models\Teacher;
use App\Models\Transportation;



class DashboardController extends Controller
{
    public function Redirects()
    {
        $user=Auth::user();
        if($user->hasRole('admin'))
        {
            return view('layouts.main');

        }

        else if($user->hasRole('parent') && $user->status==0)
        {
            $transportation=Transportation::all();
            $teacher=Teacher::all();
            $attendence = Attendence::all();
            $std = Student::all();
            return view('Parent.parent_dashboard',compact('std','attendence','teacher','transportation'));
        }

        else
        {
            return redirect()->route('blocked.parent');
        }
    }
    public function Index()
    {
    if(auth::id())
    {
        return redirect('redirects');
    }
    else
    {
        return redirect('/login');
    }


}
        public function  Adminlogout (Request $request): RedirectResponse
        {
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');
        }
    }

