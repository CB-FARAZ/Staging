<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class logoutController extends Controller
{

    protected function logout(Request $request)
    {

        Auth::logout();

        return redirect('/admin/login');

    }

}
