<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Novel;
use App\Model\Category;
use App\Model\Novel_Category;
use App\Model\Chapter;
use Illuminate\Support\Facades\DB;

use function Psy\debug;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novels = Novel::orderBy('id', 'DESC')->paginate(12);
        $trendingNovels = Novel::orderBy('id', 'DESC')->paginate(6);
        $popularNovels = Novel::orderBy('id', 'DESC')->paginate(6);
        $recentlyAdds = Novel::orderBy('id', 'DESC')->paginate(6);
        $liveActions = Novel::orderBy('id', 'DESC')->paginate(6);
        $categories = Category::all();
        return view('pages.homepage',['novels'=>$novels,'trendingNovels'=>$trendingNovels,'categories'=>$categories,'popularNovels'=>$popularNovels,'recentlyAdds'=>$recentlyAdds,'liveActions'=>$liveActions]);
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $novel = Novel::find($id);
        $novels = Novel::orderBy('id', 'DESC')->paginate(4);
        $categories = Category::all();
        $novel_categories = DB::table('novel_category')->where('novelID',$id)->get();
        $chapters = DB::table('chapter')->where('novelID',$id)->get();
        return view('pages.details',['novel'=>$novel,'categories'=>$categories,'novel_categories'=>$novel_categories,'novels'=>$novels,'chapters'=>$chapters]);
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function read($novelID, $chapterNum)
    {
        $novel = Novel::find($novelID);
        $chapter = DB::table('chapter')
            ->where('novelID',$novelID)
            ->where('number',$chapterNum)->first();
        $categories = Category::all();
        $novel_categories = DB::table('novel_category')->where('novelID',$novelID)->get();
        return view('pages.reading',['chapter'=>$chapter,'novel'=>$novel,'categories'=>$categories,'novel_categories'=>$novel_categories]);
    }
}
