<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Session;


class profileSettingController extends Controller
{
    public function adminProfile(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $user = Auth::user();

        return view('admin.profileSetting', compact('user'));
    }

    public function adminProfileupdate(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email',
        ]);

        $user = new User();

        $user->name = $request->input('name');

        $user->email = $request->input('email');

        $user->password = bcrypt($request->input('password'));

        $user->save();


        Session::flash('message', 'Successfully Updated the User Profile.');
        Session::flash('alert-class', 'bg-green-100 border border-green-400 px-4 py-3 rounded relative duration-100');
        return redirect()->route('admin.profile');
    }
}


//            'phone' => 'required',

//        $phone = substr($request->input('phone'), 0, 15);


//        $user->phone_number = $phone;
