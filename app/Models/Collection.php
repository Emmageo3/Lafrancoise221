<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Promo;

class Collection extends Model
{
    use HasFactory;

    public function favori()
    {
        return $this->belongsTo(Promo::class);
    }
}
