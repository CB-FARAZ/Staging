<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{

     public function index()
     {
         return view('admin.create');
     }

    public function store(Request $request)
    {
        $attributes = $request->validate([

            'name' => 'required|max:20',
            'email' => 'required|max:50',
            'password' => 'required|max:50',
            'role' => 'required|max:255',
            'phone_number' => 'required|min:15',
            'status' => 'required|max:2',

        ]);

        $user = User::create([

            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'password' => $attributes['password'],
            'role' => $attributes['role'],
            'phone_number' => $attributes['phone_number'],
            'status' => $attributes['status'],

        ]);
        $user->save();
    }

}
