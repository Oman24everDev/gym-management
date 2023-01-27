<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{

    public function index(){
        return view('member')->with('members', Member::all());
    }

    public function create(Request $request){
        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_expiration = $request->membership_expiration;
        $member->trainer_id = $request->trainer_id;
        $member->membership_id = $request->membership_id;
        $member->save();

        return redirect()->route('member')->with('success', 'New member added!');

    }
}
