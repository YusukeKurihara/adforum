<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = [
        'category_id',
        'year',
        'season',
        'title',
        'summary',
        ];
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}
