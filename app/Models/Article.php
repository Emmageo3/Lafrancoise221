<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\Souscategorie;
use App\Models\Collection;
use App\Models\Articlecommande;

class Article extends Model
{
    use HasFactory;

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function sous_categorie()
    {
        return $this->belongsTo(Souscategorie::class);
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function articles() 
    { 
        return $this->hasMany(Articlecommande::class); 
    }
}
