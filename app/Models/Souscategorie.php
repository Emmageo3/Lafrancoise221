<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\Categorie;

class Souscategorie extends Model
{
    use HasFactory;

    public function articles() 
    { 
        return $this->hasMany(Article::class); 
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
