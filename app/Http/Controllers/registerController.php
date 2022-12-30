<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    public function index() {
        return view("user.register");
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' =>'required|min:8',
            'alamat' => 'required',
            'notelp' => 'required'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registration succesfully, Please Login!!');
    }
}
