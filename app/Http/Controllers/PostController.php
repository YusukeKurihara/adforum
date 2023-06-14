<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Anime;
use App\Models\Evaluation;

class PostController extends Controller
{
    /**
     * Post一覧を表示する
     *
     * @Param Post Postモデル
     * @return array Postモデルリスト
     */
     
    /**
    * 特定IDのpostを表示する
    *
    * @params Object Anime // 引数の$animeはid=1のPostインスタンス
    * @return Reposnse anime view
    */
    
    public function index (Post $post, User $user, Anime $anime, Evaluation $evaluation)
    {
        return view('posts.index')->with([
            'posts' => $post->get(),
            'anime' => $anime,
            'evaluations' => $evaluation->get(),
            ]);
    }
    
    public function store (Request $request, Post $post, User $user, Anime $anime)
    {
        $user = auth()->user();
        $input = $request['post'];
        $post->anime_id = $input['anime_id'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->$anime->id);
    }
    
}
