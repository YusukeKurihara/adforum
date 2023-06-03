<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){
        return $this->belongTo(Post::class);
    }
    
    public function user(){
        return $this->belongTo(User::class);
    }
    use HasFactory;
}
