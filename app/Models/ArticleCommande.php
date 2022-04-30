<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\Commande;

class ArticleCommande extends Model
{
    use HasFactory;

    public function articles() 
    { 
        return $this->belongsTo(Article::class); 
    }

    public function commandes() 
    { 
        return $this->belongsTo(Commande::class); 
    }
}
