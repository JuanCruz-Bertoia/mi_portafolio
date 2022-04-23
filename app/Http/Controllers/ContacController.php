<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContacController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'message' => 'required',
        ]);

        //Send Email
        return ['sucess' => true];
    }
}
