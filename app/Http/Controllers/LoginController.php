<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Model\Novel;
use App\Model\Category;
use App\User;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    public function __construct()
    {
      $categories = Category::all();
      $topViewsNvs = Novel::orderBy('id', 'ASC')->paginate(5);
      View::share('categories', $categories);
      View::share('topViewsNvs',$topViewsNvs);
    }

    public function show()
    {
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $user = User::where([
            'email' => $request->email,
            'password' => $request->password
        ])->first();

        if($user)
        {
            Auth::login($user);
            return redirect('/');
        } else {
            $error=1;
            return view('pages.login',['error'=>$error]);
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return back();
    }
}
