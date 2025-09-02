<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public $timestamps = false;

    function artists()
    {
        return $this->belongsTo(Artist::class);
    }

    function songs()
    {
        return $this->hasMany(Song::class);
    }

}
