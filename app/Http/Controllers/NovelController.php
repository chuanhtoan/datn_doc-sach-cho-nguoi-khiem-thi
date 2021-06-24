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
    public function __construct()
    {
        $languages = [ 'Tiếng Việt',
            'Abkhazian','Afar','Afrikaans','Akan','Albanian','Amharic','Arabic','Aragonese','Armenian',
            'Assamese','Avaric','Avestan','Aymara','Azerbaijani','Bambara','Bashkir','Basque','Belarusian','Bengali',
            'Bihari languages','Bislama','Bosnian','Breton','Bulgarian','Burmese','Catalan, Valencian',
            'Central Khmer','Chamorro','Chechen','Chichewa, Chewa, Nyanja','Chinese',
            'Church Slavonic, Old Bulgarian, Old Church Slavonic','Chuvash','Cornish','Corsican','Cree','Croatian',
            'Czech','Danish','Divehi, Dhivehi, Maldivian','Dutch, Flemish','Dzongkha','English','Esperanto',
            'Estonian','Ewe','Faroese','Fijian','Finnish','French','Fulah','Gaelic, Scottish Gaelic','Galician',
            'Ganda','Georgian','German','Gikuyu, Kikuyu','Greek (Modern)','Greenlandic, Kalaallisut','Guarani',
            'Gujarati','Haitian, Haitian Creole','Hausa','Hebrew','Herero','Hindi','Hiri Motu','Hungarian',
            'Icelandic','Ido','Igbo','Indonesian','Interlingua (International Auxiliary Language Association)',
            'Interlingue','Inuktitut','Inupiaq','Irish','Italian','Japanese','Javanese','Kannada','Kanuri','Kashmiri',
            'Kazakh','Kinyarwanda','Komi','Kongo','Korean','Kwanyama, Kuanyama','Kurdish','Kyrgyz','Lao','Latin',
            'Latvian','Letzeburgesch, Luxembourgish','Limburgish, Limburgan, Limburger','Lingala','Lithuanian',
            'Luba-Katanga','Macedonian','Malagasy','Malay','Malayalam','Maltese','Manx','Maori','Marathi',
            'Marshallese','Moldovan, Moldavian, Romanian','Mongolian','Nauru','Navajo, Navaho','Northern Ndebele',
            'Ndonga','Nepali','Northern Sami','Norwegian','Norwegian Bokmål','Norwegian Nynorsk','Nuosu, Sichuan Yi',
            'Occitan (post 1500)','Ojibwa','Oriya','Oromo','Ossetian, Ossetic','Pali','Panjabi, Punjabi',
            'Pashto, Pushto','Persian','Polish','Portuguese','Quechua','Romansh','Rundi','Russian','Samoan','Sango',
            'Sanskrit','Sardinian','Serbian','Shona','Sindhi','Sinhala, Sinhalese','Slovak','Slovenian','Somali',
            'Sotho, Southern','South Ndebele','Spanish, Castilian','Sundanese','Swahili','Swati','Swedish','Tagalog',
            'Tahitian','Tajik','Tamil','Tatar','Telugu','Thai','Tibetan','Tigrinya','Tonga (Tonga Islands)','Tsonga',
            'Tswana','Turkish','Turkmen','Twi','Uighur, Uyghur','Ukrainian','Urdu','Uzbek','Venda',
            'Volap_k','Walloon','Welsh','Western Frisian','Wolof','Xhosa','Yiddish','Yoruba','Zhuang, Chuang','Zulu'
        ];
        View::share('languages', $languages);
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

        if($user && $user->type >= 1)
        {
            $items = Novel::all();
            $novel_categories = Novel_Category::all();
            $categories = Category::all();
            return view('admin.novel.index',['items'=>$items,'novel_categories'=>$novel_categories,
            'categories'=>$categories,'user'=>$user]);
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
        $product = Novel::find($product_id);
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
            'title' => [\Illuminate\Validation\Rule::unique('Novel')],
        ],
        [
            'title.unique' => 'Sách đã tồn tại',
        ]);

        $product = Novel::create($request->input());

        // Gui them array the loai vao file json
        $tlarray = array();
        foreach ($request->theLoaiIDs as $tl) {
            $tenTL = Category::find($tl);
            array_push($tlarray, $tenTL->name);
        }
        $product['tlarray'] = $tlarray;
        $product['tlarray_id'] = $request->theLoaiIDs;

        // Them bang phim_theloai
        foreach ($request->theLoaiIDs as $idTheLoai) {
            $phim_theloai = new Novel_Category();
            $phim_theloai->novelID = $product->id;
            $phim_theloai->categoryID = $idTheLoai;
            $phim_theloai->save();
        }

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
            'title' => [\Illuminate\Validation\Rule::unique('novel')->ignore($id)],
        ],
        [
            'title.unique' => 'Sách đã tồn tại',
        ]);

        $product = Novel::find($id);
        $product->title = $request->title;
        $product->cover = $request->cover;
        $product->description = $request->description;
        $product->author = $request->author;
        $product->status = $request->status;
        $product->type = $request->type;
        $product->publishYear = $request->publishYear;
        $product->language = $request->language;
        $product->rating = $request->rating;
        $product->save();

        // Gui them array the loai vao file json
        $tlarray = array();
        foreach ($request->theLoaiIDs as $tl) {
            $tenTL = Category::find($tl);
            array_push($tlarray, $tenTL->name);
        }
        // $product['tlarray'] = $tlarray;
        $product['tlarray'] = $tlarray;
        $product['tlarray_id'] = $request->theLoaiIDs;

        // Them bang phim_theloai
        $phim_theloai = DB::table('novel_category')->where('novelID',$id)->delete();
        foreach ($request->theLoaiIDs as $idTheLoai) {
            $phim_theloai = new Novel_Category();
            $phim_theloai->novelID = $product->id;
            $phim_theloai->categoryID = $idTheLoai;
            $phim_theloai->save();
        }

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
        $product = Novel::destroy($product_id);
        return response()->json($product);
    }
}
