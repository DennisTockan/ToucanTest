<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\School;

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


    public function showMembersBySchool($school_id) {
        $members = Member::where('school_id', $school_id)->get();
        $school = School::find($school_id); 
    
        return view('/homeid', ['members' => $members, 'school' => $school]);
    }
}
