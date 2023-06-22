<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        return view('admin/login');


    }


    public function authenticateLoginRequest(Request $request): \Illuminate\Http\RedirectResponse

    {

        $attributes = $request->validate([

            'email' => 'required|max:50',

            'password' => 'required|max:255',

        ]);

        $user = User::where('email', $attributes['email'])->first();

        if (!$user || !Hash::check($attributes['password'], $user->password)) {
            return redirect()->back()
                ->withInput($request->except('password'))
                ->withErrors(['hidden' => 'These credentials do not match our records.']);
        }


        auth()->login($user);

        return redirect()->route('admin.dashboard');


    }


}

