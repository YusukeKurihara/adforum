<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Anime;

class AnimeController extends Controller
{
    /**
     * Animet一覧を表示する
     *
     * @Param Anime Animeモデル
     * @return array Animeモデルリスト
     */
     
    /**
    * 特定IDのanimeを表示する
    *
    * @params Object Anime // 引数の$animeはid=1のAnimeインスタンス
    * @return Reposnse anime view
    */
    
    public function index (Request $request)
    {
        $keyword = $request->input('keyword');
        $query = Anime::query();
        if(!empty($keyword))
        {
            $query->where('title', 'LIKE', "%{$keyword}%")
                  ->orWhere('year', "$keyword");
        }
        $animes = $query->get();
        return view('animes.index', compact('animes','keyword'));
    }
    
    /*public function seasonsearch (Anime $anime)
    {
        $anime = DB::table('animes')->select('year')->get();
        return view('animes/index')->with([$anime]);
    }*/
}