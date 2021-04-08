<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Novel;
use App\User;
use App\Model\Category;
use App\Model\Novel_Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class NovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = null;
        if ( Auth::check() )   {
            $user = Auth::user();
        }

        if($user && $user->type == 1)
        {
            $novels = Novel::all();
            $novel_categories = Novel_Category::all();
            $categories = Category::all();
            return view('admin.sach.index',['items'=>$novels,'novel_categories'=>$novel_categories,
            'categories'=>$categories,'user'=>$user]);
        } else {
            $error=1;
            return view('admin.login',['error'=>$error]);
        }
    }
}
