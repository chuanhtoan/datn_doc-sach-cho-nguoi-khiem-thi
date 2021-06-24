<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;

use function Psy\debug;

class LoginAdminController extends Controller
{
    public function show()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $user = User::where([
            'email' => $request->email,
            'password' => $request->password,
        ])->first();

        if($user && $user->type >= 1)
        {
            Auth::login($user);
            return redirect('/admin');
        } else {
            $error=1;
            return view('admin.login',['error'=>$error]);
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return back();
    }
}
