<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function anime(){
        return $this->belongTo(Anime::class);
    }
    
    public function evaluation(){
        return $this->belongTo(Evaluation::class);
    }
    
     public function user(){
        return $this->belongTo(User::class);
    }
    use HasFactory;
}
