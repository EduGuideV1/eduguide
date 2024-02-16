<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('formule.stage_one');
    }


    public function stageOne(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'phone_number' => 'required',
        ]);

        // Store the data in session or database
        session(['full_name' => $request->full_name, 'phone_number' => $request->phone_number]);

        return view('formule.stage_two');
    }

    public function stageTwo(Request $request)
    {
        $request->validate([
            'education_level' => 'required',
            'pays' => 'required',
            'formation' => 'required',
        ]);

        // Store the data in session or database
        session([
            'education_level' => $request->education_level,
            'pays'            => $request->pays,
            'formation'       => $request->formation
        ]);

        return redirect()->route("homepage");
    }
}
