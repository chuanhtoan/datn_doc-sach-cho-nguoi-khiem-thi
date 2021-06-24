<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
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
            $categories = Category::all();
            return view('admin.category.index',['items'=>$categories,'user'=>$user]);
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
        $product = Category::find($product_id);
        return response()->json($product);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Kiem tra unique
        $this->validate($request,
        [
            'name' => [\Illuminate\Validation\Rule::unique('Category')],
        ],
        [
            'name.unique' => 'Thể loại đã tồn tại',
        ]);

        $product = Category::create($request->input());
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
        // Kiem tra unique
        $this->validate($request,
        [
            'name' => [\Illuminate\Validation\Rule::unique('Category')->ignore($id)],
        ],
        [
            'name.unique' => 'Thể loại đã tồn tại',
        ]);

        $product = Category::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
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
        $product = Category::destroy($product_id);
        return response()->json($product);
    }
}
