<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Commande extends Model
{
    use HasFactory;

    public function articles() 
    { 
        return $this->hasMany(Article::class); 
    }

    public function users() 
    { 
        return $this->hasMany(User::class); 
    }

}
