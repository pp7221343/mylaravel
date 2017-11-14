<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function getlogin()
    {
        return view('admin.login');
    }

    public function postlogin(Request $request)
    {

        $this->validate($request, [
            'user' => 'min:5|max:18|required',
            'password' => 'min:6|max:18|required',
        ]);
//        dd(Hash::make('123123'));
        $date = DB::table('admin_user')->where('user',$request->user)->first();
//        dd(Hash::check($request->password,$date->password));
//        dd($date);
        if ($date != null && Hash::check($request->password,$date->password)){
            auth::login($date);
            return view('admin.home');
        }
        return 0;
//        return redirect('/adminv')->with('log','account defind');

    }
}
