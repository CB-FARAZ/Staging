<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class clientController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::all();
        return view('admin.client' , compact('users'));

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
            'avatar' => $request->input('avatar'),
        ]);

        $this->file($request, $user);

        $user->save();
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.create');
    }

    public function file(LoginRequest $request, $user): void
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('avatar', $filename);
            $user->avatar = $path;

        }
    }

    public function destroy(Request $request)

    {
        User::where('id', $request->id)->delete();

        Session::flash('message', 'Successfully Deleted the User!');

        return redirect()->route('client.index');

    }

}
