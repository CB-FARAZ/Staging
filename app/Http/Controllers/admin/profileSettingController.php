<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class profileSettingController extends Controller
{
    public function adminProfile(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $user = Auth::user();

        return view('admin.profileSetting', compact('user'));
    }


    public function adminProfileupdate(StorePostRequest $request)
    {
        $user = $this->getAuthenticatable($request);

        $this->fileUpload($request, $user);

        $user->save();

        Session::flash('message', 'Successfully updated the user profile.');
        return redirect()->route('admin.profile');
    }


    public function getAuthenticatable(StorePostRequest $request): ?\Illuminate\Contracts\Auth\Authenticatable
    {
        $user = Auth::user();
        $user->update($request->only(['name', 'email', 'avatar']));
        $user->password = bcrypt($request->input('password'));
        return $user;

    }

    /**
     * @param StorePostRequest $request
     * @param \Illuminate\Contracts\Auth\Authenticatable|null $user
     * @return void
     */
    public function fileUpload(StorePostRequest $request, ?\Illuminate\Contracts\Auth\Authenticatable $user): void
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $file->storeAs('avatar', $filename);
            $user->avatar = $filename;
        }
    }


}



