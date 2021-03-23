<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Novel;
use App\Model\AnotherTitle;
use App\Model\Account;
use App\Model\Comment;
use App\Model\Category;
use App\Model\Novel_Category;
use App\Model\Chapter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

use function Psy\debug;

class PageController extends Controller
{
    public function __construct()
    {
      $categories = Category::all();
      $topViewsNvs = Novel::orderBy('id', 'ASC')->paginate(5);
      View::share('categories', $categories);
      View::share('topViewsNvs',$topViewsNvs);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novels = Novel::all();
        $trendingNovels = Novel::orderBy('id', 'DESC')->paginate(6);
        $popularNovels = Novel::orderBy('id', 'ASC')->paginate(6);
        $recentlyAdds = Novel::orderBy('id', 'DESC')->paginate(6);
        $liveActions = Novel::orderBy('id', 'ASC')->paginate(6);
        $novel_categories = Novel_Category::all();
        return view('pages.homepage',['novels'=>$novels,'trendingNovels'=>$trendingNovels,
        'popularNovels'=>$popularNovels,'recentlyAdds'=>$recentlyAdds,'liveActions'=>$liveActions,
        'novel_categories'=>$novel_categories]);
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
        $another_title = DB::table('another_title')->where('novelID',$id)->first();
        $novels = Novel::orderBy('id', 'DESC')->paginate(4);
        $novel_categories = DB::table('novel_category')->where('novelID',$id)->get();
        $chapters = DB::table('chapter')->where('novelID',$id)->get();
        $accounts = Account::all();
        $comments = DB::table('comment')->where('novelID',$id)->get();
        return view('pages.details',['novel'=>$novel,'novel_categories'=>$novel_categories,
        'novels'=>$novels,'chapters'=>$chapters,'accounts'=>$accounts,'comments'=>$comments,
        'another_title'=>$another_title]);
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
        $novel_categories = DB::table('novel_category')->where('novelID',$novelID)->get();
        return view('pages.reading',['chapter'=>$chapter,'novel'=>$novel,'novel_categories'=>$novel_categories]);
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

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function createComment(Request $request)
    {
        $comment = Comment::create($request->input());
        return response()->json($comment);
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function categorySearch($id)
    {
        $novels = Novel::all();
        $novel_categories = DB::table('novel_category')->where('categoryID',$id)->get();
        $novel_categories_all = Novel_Category::all();
        $category = Category::find($id);
        return view('pages.categories',['novels'=>$novels,'novel_categories'=>$novel_categories,'category'=>$category,
        'novel_categories_all'=>$novel_categories_all]);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $novels = DB::table('novel')->orderBy('id', 'DESC')->where('title','like','%'.$search.'%')->get();
        $novel_categories = Novel_Category::all();
        return view('pages.search',['novels'=>$novels,'novel_categories'=>$novel_categories]);
    }
}
