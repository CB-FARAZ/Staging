<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Doctrine\Inflector\Rules\French\Rules;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class adminController extends Controller
{

     public function index()
     {
         return view('admin.create');
     }

    public function store(LoginRequest $request)
    {
        User::create($request->validated());

        $user = User::create([

            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => $request->input('role'),
            'phone_number' => $request->input('phone_number'),
            'status' => $request->input('status'),

        ]);

         dd($user->email);
        $user->save();




        return redirect()->route('admin.dashboard');

    }

}
