<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Novel;
use App\Model\AnotherTitle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AnotherTitleController extends Controller
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
            $items = AnotherTitle::all();
            $novels = Novel::all();
            return view('admin.anothertitle.index',['items'=>$items,'user'=>$user,'novels'=>$novels]);
        } else {
            $error=1;
            return view('admin.login',['error'=>$error]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $product = AnotherTitle::find($product_id);
        return response()->json($product);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function novel($id)
    {
        $user = null;
        if ( Auth::check() )   {
            $user = Auth::user();
        }

        if($user && $user->type == 1)
        {
            $novels = Novel::all();
            $novel = Novel::find($id);
            $products = DB::table('another_title')->where('novelID',$id)->get();
            return view('admin.anothertitle.index',['items'=>$products,'user'=>$user,
            'novel'=>$novel,'novels'=>$novels]);
        } else {
            $error=1;
            return view('admin.login',['error'=>$error]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = AnotherTitle::create($request->input());
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = AnotherTitle::find($id);
        $product->title = $request->title;
        $product->novelID = $request->novelID;
        $product->save();
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $product = AnotherTitle::destroy($product_id);
        return response()->json($product);
    }
}
