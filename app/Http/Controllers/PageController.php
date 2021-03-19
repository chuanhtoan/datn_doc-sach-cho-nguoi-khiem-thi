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

    public function write($novelID, $chapterNum)
    {
        $novel = Novel::find($novelID);
        $chapter = DB::table('chapter')
            ->where('novelID',$novelID)
            ->where('number',$chapterNum)->first();
        return view('pages.writing',['chapter'=>$chapter,'novel'=>$novel]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chapter = Chapter::create($request->input());
        return response()->json($chapter);
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
        $chapter = Chapter::find($id);
        $chapter->content = $request->content;
        $chapter->title = $request->title;
        $chapter->number = $request->number;
        $chapter->save();
        return response()->json($chapter);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chapter = Chapter::destroy($id);
        return response()->json($chapter);
    }

    public function postBaoCao($id,Request $request)
    {
        $chapter = new Chapter;
        $chapter->content = $request->content;
        $chapter->title = $request->title;
        $chapter->number = $request->number;
        $chapter->save();

        return redirect("/")->with('Lưu chương thành công!');
    }
}
