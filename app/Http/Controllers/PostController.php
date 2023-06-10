<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
Use App\Models\Anime;

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
    
    public function index (Post $post, User $user, Anime $anime)
    {
        return view('posts.index')->with(['posts' => $post->get(), 'anime' => $anime]);
    }
    
    public function store (Request $request, Post $post, User $user)
    {
        $user = auth()->user();
        $input = $request['post'];
        $post->anime_id = $input['anime_id'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->$anime->id);
    }
    
}
