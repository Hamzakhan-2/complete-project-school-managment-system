<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminApprovalController extends Controller
{
    public function index()
    {
        $unapproved = User::where('is_approved', false)->get();
        return view('newuser.newuser', compact('unapproved'));
    }
    public function approve(User $user)
    {
        $user->update(['is_approved' => true]);
        return redirect()->route('admin.approve.index');
    }


}
