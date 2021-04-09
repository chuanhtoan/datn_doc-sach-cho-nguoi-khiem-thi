<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Novel;
use App\Model\Chapter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class ChapterController extends Controller
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
            $items = Chapter::all();
            $novels = Novel::all();
            return view('admin.chapter.index',['items'=>$items,'user'=>$user,'novels'=>$novels]);
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
        $product = Chapter::find($product_id);
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
            $products = DB::table('chapter')->where('novelID',$id)->get();
            return view('admin.chapter.index',['items'=>$products,'user'=>$user,
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
        $product = Chapter::create($request->input());
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
        $product = Chapter::find($id);
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
        $product = Chapter::destroy($product_id);
        return response()->json($product);
    }
}
