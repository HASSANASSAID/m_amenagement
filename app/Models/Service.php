<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = ['id'];

    function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    function color()
    {
        return $this->belongsTo(Color::class);
    }
}
