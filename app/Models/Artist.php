<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public $timestamps = false;

    function members()
    {
        return $this->hasMany(Member::class);
    }


    function albums()
    {
        return $this->hasMany(Album::class);
    }
}
