<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\FollowList;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class FollowListController extends Controller
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

         if($user && $user->type >= 1)
         {
             $products = FollowList::all();
             return view('admin.follow.index',['items'=>$products,'user'=>$user]);
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
         $product = FollowList::find($product_id);
         $product['email'] = User::find($product->accUsername)->email;
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
         $product = FollowList::destroy($product_id);
         return response()->json($product);
     }
}
