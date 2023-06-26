<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class clientController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.client');
    }

    public function store(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {

        $this->getauthenticate($request);

        Session::flash('message', 'Successfully created the user profile.');

        return redirect()->route('create.index');
    }


    /**
     * @param LoginRequest $request
     * @return void
     */
    public function getauthenticate(LoginRequest $request): void
    {

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $this->file($request, $user);

        $user->save();
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.create');
    }

    /**
     * @param LoginRequest $request
     * @param $user
     * @return void
     */
    public function file(LoginRequest $request, $user): void
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('avatar', $filename);
            $user->avatar = $path;

        }
    }

    public function edit()
    {




    }


}
