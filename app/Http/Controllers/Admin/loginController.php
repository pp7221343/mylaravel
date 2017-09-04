<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
    public function getlogin()
    {
        return view('admin.login');
    }

    public function postlogin(Request $request)
    {
        $this->validate($request, [
            'user' => 'required|unique:posts|max:255',
            'password' => 'required',
        ]);
        dd($request->all());
    }
}
