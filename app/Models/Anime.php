<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    public function posts(){
        return $this->hasMany(Post::class);
    }
    
    public function category(){
        return $this->belongTo(Category::class);
    }
    use HasFactory;
}
