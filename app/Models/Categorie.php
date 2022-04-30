<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Categorie extends Model
{
    use HasFactory;

    public function articles() 
{ 
    return $this->hasMany(Article::class); 
}
}
