<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public $timestamps = false;

    function albums()
    {
        return $this->belongsTo(Album::class);
    }
}
