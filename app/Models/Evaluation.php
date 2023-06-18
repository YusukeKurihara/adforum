<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = 
    [
        'anime_id',
        'user_id',
        'evaluation_id',
        'body',
    ];
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
    use HasFactory;
    
    public function getPost()
    {
        return $this->posts()->with('evaluation')->get();
    }
}
