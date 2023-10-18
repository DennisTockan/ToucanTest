<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function store(Request $request){
        
        $member = new Member();

        $member->name = $request->input('name');
        $member->email = $request->input('email');
        $member->school_id = $request->input('school');

        $member->save();



        return redirect('/home')->with('message', "You've successfully added a member!");
    }
}
