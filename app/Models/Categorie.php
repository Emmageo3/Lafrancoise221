<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\Souscategorie;

class Categorie extends Model
{
    use HasFactory;

    public function souscategories()
    {
        return $this->belongsTo(Souscategorie::class);
    }


}
