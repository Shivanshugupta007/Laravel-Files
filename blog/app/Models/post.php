<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }
    public function tags()
    {
        return $this->belongsToMany(tag::class);
    }
}
