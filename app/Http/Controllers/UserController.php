<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uplodeImage(Request $request)
    {
        if ($request->hasFile('image')) {
            User::UploadeAvatar($request->image);
            return redirect()->back()->with('message', 'Avatar uploaded');
        }
        return redirect()->back()->with('error', 'Avatar not uploaded');
    }
}