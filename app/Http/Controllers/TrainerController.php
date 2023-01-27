<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class TrainerController extends Controller
{
    public function displayAll(){
        return view('trainer')->with('trainers', Trainer::orderByDesc('created_at')->get());
    }

    public function create(Request $request){
        $trainer = new Trainer;
        $trainer->name = $request->name;
        $trainer->email = $request->email;
        $trainer->specialization = $request->specialization;
        $trainer->phone = $request->phone;

        $trainer->save();
        return redirect()->route('trainer')->with('success', 'New trainer created!');
    }

}
