<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
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
            'user' => 'required|unique:admin_user|max:255',
        ]);
        $date = DB::table('admin_user')->where('user',$request->user)->first();
        dd($date);
    }
}
