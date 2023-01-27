<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;

class MembershipController extends Controller
{
    public function memberstype(Request $request){
        $membership = new Membership;
        $membership->membership_type = $request->membership_type;
        $membership->membership_price = $request->membership_price;

        $membership->save();
    }
}
