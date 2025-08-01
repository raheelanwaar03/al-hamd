<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emailController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
        ]);
        return redirect()->back()->with('success', 'Your Email added successfully');
    }
}
