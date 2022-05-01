<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Souscategorie;
use App\Models\Collection;
use App\Models\Commande;
use App\Models\Favori;

class Article extends Model
{
    use HasFactory;

    public function souscategorie()
    {
        return $this->belongsTo(Souscategorie::class);
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }

    public function favoris()
    {
        return $this->hasMany(Favori::class);
    }
}
