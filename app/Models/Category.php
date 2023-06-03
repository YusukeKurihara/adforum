<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function animes(){
        return $this->hasMany(Anime::class);
    }
    use HasFactory;
}
