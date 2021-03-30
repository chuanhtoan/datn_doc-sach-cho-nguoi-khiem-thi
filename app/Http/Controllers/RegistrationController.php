<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Model\Novel;
use App\Model\Category;
use App\User;
use Illuminate\Support\Facades\View;

class RegistrationController extends Controller
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
        return view('pages.signup');
    }

    public function register(Request $request)
    {
        // $validator = $request->validate([
        //   'name'      => 'required|min:1',
        //   'email'     => 'required',
        //   'password'  => 'required|min:6'
        // ]);

        // dd($request->input());

        User::create($request->input());

        // \App\User::create($validator);

        return redirect('/login');
     }
}
