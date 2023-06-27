<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Session;



class editController extends Controller

{

    public function index($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $user = User::findOrFail($id);

        return view('admin.editClient', compact('user'));
    }

    public function update(StorePostRequest $request): \Illuminate\Http\RedirectResponse
    {
        $user = $this->updateclient($request);

        $this->fileupload($request, $user);

        $user->save();

        Session::flash('message', 'Successfully updated the user profile.');
        return redirect()->route('client.index');
    }


    public function updateclient(StorePostRequest $request): ?Authenticatable
    {

        $user = User::where('id', $request->id)->first();
        $user->update($request->only(['name', 'email', 'avatar']));
        $user->password = bcrypt($request->input('password'));

        return $user;

    }

    /**
     * @param StorePostRequest $request
     * @param Authenticatable|null $user
     * @return void
     */

    public function fileupload(StorePostRequest $request, ?Authenticatable $user): void
    {
        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $file->storeAs('avatar', $filename);
            $user->avatar = $filename;
        }
    }


}
