<?php

namespace App\Http\Controllers;
use App\Models\NewUser;
use App\Models\User;
use App\Notifications\SampleNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserApproved;


use Illuminate\Http\Request;

class NewUserController extends Controller
{
    public function NewUsers()
    {
        $user= User::all();
        return view('layouts.newuser.newuser',compact('user'));
    }
//this code for approved user delete
    public function destroy($id)
{
    User::destroy($id);
    return redirect()->back();
}

//this code for when new user login admin delete new user

public function destroyunapproved($id)
{
    User::destroy($id);
    return redirect()->back();
}
    public function sendNotification()

    //this code for new user approved
{
    $user = Auth::user();

    $user->notify(new SampleNotification());
}
public function approve($id)
{
    $user = User::find($id);
    if (!$user)
 {
     return redirect()->back()->with('error', 'User not found.');
 }
    $user->update([
        'is_approved' => 1,
    ]);

    Mail::to($user->email)->send(new UserApproved($user));
    return redirect()->back()->with('success', 'User approved successfully.');
}

}
