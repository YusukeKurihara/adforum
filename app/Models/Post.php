<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = 
    [
        'body',
    ];
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function anime(){
        return $this->belongsTo(Anime::class);
    }
    
    public function evaluation(){
        return $this->belongsTo(Evaluation::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
