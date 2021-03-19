<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Account;
use App\Model\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function __construct()
    {
      $categories = Category::all();
      View::share('categories', $categories);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::orderBy('id', 'DESC')->get();
        return view('pages.login')->with('accounts', $accounts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account = Account::create($request->input());
        return response()->json($account);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = Account::find($id);
        return response()->json($account);
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $account = Account::find($id);
    //     $account->username = $request->username;
    //     // $account->password = $request->password;
    //     $account->email = $request->email;
    //     $account->hinh = $request->hinh;
    //     $account->loai = $request->loai;
    //     $account->save();
    //     return response()->json($account);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = Account::destroy($id);
        return response()->json($account);
    }

    public function getSignup()
    {
        return view('pages.signup');
    }

    public function getLogin()
    {
        // Auth::logout();
        return view('pages.login');
    }

    public function getLogout()
    {
        // Auth::logout();
        return \redirect('/');
    }
}
