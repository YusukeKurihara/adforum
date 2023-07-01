<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
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
    
    /*public function index (Comment $comment, Post $post)
    {
        return view('comments.index')->with([
            'comments' => $comment->GetComment(),
            'post' => $post,
            ]);
    }*/
    
    
}
