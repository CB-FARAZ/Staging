<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\StorePostRequest;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Session;


class adminController extends Controller
{

    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.create');
    }

    public function store(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {

        $this->authenticate($request);

        Session::flash('message', 'Successfully created the user profile.');

        return redirect()->route('create.index');
    }

    /**
     * @param LoginRequest $request
     * @return void
     */
    public function authenticate(LoginRequest $request): void
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        $user->status = $request->input('status');
//        $user->avatar = $request->input('avatar');

        $user->save();
    }






}
