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
    
    public function index (Anime $anime, Evaluation $evaluation)
    {
        return view('evaluations/index')->with([
            'evaluations' => $evaluation->get()
            ]);
    }
    
}