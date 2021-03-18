<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Novel;
use App\Model\Category;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $novel = Novel::orderBy('id', 'DESC')->paginate(12);
        // $category = Category::all();
        // return view('pages.trangchu',['novel'=>$novel,'category'=>$category]);
    }
}
