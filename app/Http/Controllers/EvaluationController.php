<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Evaluation;
use App\Models\Anime;
use App\Models\Post;

class EvaluationController extends Controller
{
    /**
     * Post一覧を表示する
     *
     * @Param Post Postモデル
     * @return array Postモデルリスト
     */
    
    public function evaluation (Post $post, Anime $anime, Evaluation $evaluation)
    {
        return view('evaluations.evaluation')->with([
            'posts' => $evaluation->getPost(),
            'anime' => $anime,
            'evaluation' => $evaluation,
            ]);
    }
    
}