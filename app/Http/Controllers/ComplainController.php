<?php

namespace App\Http\Controllers;
use App\Models\Complain;
use App\Models\Parents;

use Illuminate\Http\Request;

class ComplainController extends Controller
{
    public function Complain()
{
    $parent=Parents::all();
    return view('layouts.complain.complain',compact('parent'));
}
public function AddComplain(Request $request)
{
// dd($request->all());
    $complain = new Complain();
    $complain->title = $request->title;
    $complain->notice_date = $request->notice_date;
    $complain->publish_date = $request->publish_date;
    $complain->messageto = $request->messageto;
    $complain->messagebox = $request->messagebox;

    $complain->save();
    return redirect()->back();


}

}
