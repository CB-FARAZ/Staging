<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index()
    {
        return view('admin.client');
    }


}
