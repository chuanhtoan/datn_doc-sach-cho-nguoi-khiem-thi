<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Novel;
use App\Model\AnotherTitle;
use App\User;
use App\Model\Comment;
use App\Model\Category;
use App\Model\Novel_Category;
use App\Model\Chapter;
use App\Model\FollowList;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

use function Psy\debug;

class PageController extends Controller
{
    public function __construct()
    {
        $categories = Category::all();
        $topViewsNvs = Novel::all()->random(6);
        $newComments = Novel::all()->random(6);
        View::share('categories', $categories);
        View::share('topViewsNvs',$topViewsNvs);
        View::share('newComments',$newComments);
    }

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

        $novels = Novel::all();
        $trendingNovels = Novel::orderBy('id', 'DESC')->paginate(9);
        $novel_categories = Novel_Category::all();
        return view('pages.homepage',['novels'=>$novels,'trendingNovels'=>$trendingNovels,
        'novel_categories'=>$novel_categories,'user'=>$user]);
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $user = null;
        $userid = 0;
        $logged = 0;
        if ( Auth::check() )   {
            $user = Auth::user();
            $userid = $user->id;
            $logged = $user->id;
        }

        $novel = Novel::find($id);
        $another_title = DB::table('another_title')->where('novelID',$id)->first();
        $novels = Novel::all()->random(4);
        $novel_categories = DB::table('novel_category')->where('novelID',$id)->get();
        $chapters = DB::table('chapter')->where('novelID',$id)->get();
        $accounts = User::all();
        $comments = DB::table('comment')->where('novelID',$id)->get();
        $commentCount = DB::table('comment')->where('novelID',$id)->count();
        $follow_lists = DB::table('follow_list')
                    ->where('accUsername',$userid)
                    ->where('novelID',$id)
                    ->first();
        return view('pages.details',['novel'=>$novel,'novel_categories'=>$novel_categories,
        'novels'=>$novels,'chapters'=>$chapters,'accounts'=>$accounts,'comments'=>$comments,
        'another_title'=>$another_title,'user'=>$user,'logged'=>$logged,'follow_lists'=>$follow_lists,
        'commentCount'=>$commentCount]);
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function read($novelID, $chapterNum)
    {
        $user = null;
        $logged = 0;
        if ( Auth::check() )   {
            $user = Auth::user();
            $logged = $user->id;
        }

        $novel = Novel::find($novelID);
        $chapter = DB::table('chapter')
            ->where('novelID',$novelID)
            ->where('number',$chapterNum)->first();
        $novel_categories = DB::table('novel_category')->where('novelID',$novelID)->get();
        $comments = DB::table('comment')->where('novelID',$novelID)->get();
        $accounts = User::all();
        return view('pages.reading',['chapter'=>$chapter,'novel'=>$novel,
        'novel_categories'=>$novel_categories,'comments'=>$comments,
        'accounts'=>$accounts,'user'=>$user,'logged'=>$logged]);
    }

    public function write($novelID, $chapterNum)
    {
        $user = null;
        if ( Auth::check() )   {
            $user = Auth::user();
        }

        $novel = Novel::find($novelID);
        $chapter = DB::table('chapter')
            ->where('novelID',$novelID)
            ->where('number',$chapterNum)->first();
        return view('pages.writing',['chapter'=>$chapter,'novel'=>$novel,'chapterNum'=>$chapterNum,'user'=>$user]);
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
        $user = null;
        if ( Auth::check() )   {
            $user = Auth::user();
        }

        $novels = Novel::all();
        $novel_categories = DB::table('novel_category')->where('categoryID',$id)->get();
        $novel_categories_all = Novel_Category::all();
        $category = Category::find($id);
        return view('pages.categories',['novels'=>$novels,'novel_categories'=>$novel_categories,'category'=>$category,
        'novel_categories_all'=>$novel_categories_all,'user'=>$user]);
    }

    public function search(Request $request)
    {
        $user = null;
        if ( Auth::check() )   {
            $user = Auth::user();
        }

        $search = $request->get('search');
        $novels = DB::table('novel')->orderBy('id', 'DESC')->where('title','like','%'.$search.'%')->get();
        $novel_categories = Novel_Category::all();
        return view('pages.search',['novels'=>$novels,'novel_categories'=>$novel_categories,'user'=>$user]);
    }

    public function about()
    {
        $user = null;
        if ( Auth::check() )   {
            $user = Auth::user();
        }

        return view('pages.aboutus',['user'=>$user]);
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function follow()
    {
        if ( !Auth::check() )   {
            return redirect('/');
        }

        $user = Auth::user();
        $follow_lists = DB::table('follow_list')->select('novelID')->where('accUsername',$user->id)->get();
        $novels = Novel::all();
        $novel_categories = Novel_Category::all();
        return view('pages.follow',['novels'=>$novels,'novel_categories'=>$novel_categories,'user'=>$user,'follow_lists'=>$follow_lists]);
    }

    public function followNovel($id)
    {
        if ( !Auth::check() )   {
            return redirect('/login');
        }

        $user = Auth::user();
        $follow_list = new FollowList;
        $follow_list->novelID = $id;
        $follow_list->accUsername = $user->id;
        $follow_list->save();

        return redirect("/novel/$id");
    }

    public function unfollow($id)
    {
        if ( !Auth::check() )   {
            return redirect('/');
        }

        $user = Auth::user();
        $follow_lists = DB::table('follow_list')
                    ->where('novelID',$id)
                    ->where('accUsername',$user->id)
                    ->delete();

        return redirect("/novel/$id");
    }
}
