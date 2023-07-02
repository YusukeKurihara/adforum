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
    
    public function search (Request $request)
    {
        $keyword = $request->input('keyword');
        $year = $request->input('year');
        $season = $request->input('season');
        
        $query = Anime::query();
        if(!empty($keyword))
        {
            $query->where('title', 'LIKE', "%{$keyword}%");
        }
        
        if(!empty($year) && !empty($season))
        {
            $query->where('year', 'LIKE', "{$year}")
                  ->where('season', 'LIKE', "{$season}");
        }
        
        $animes = $query->get();
        return view('animes.search', compact('animes','keyword'));
    }
    
    public function create()
    {
        return view('animes.animestore');
    }
    
    public function store(Request $request, Anime $anime)
    {
        $input = $request['anime'];
        $anime->fill($input)->save();
        return redirect('/animestore');
    }
}