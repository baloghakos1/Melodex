<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public $timestamps = false;

    function member()
    {
        return $this->hasMany(Member::class);
    }


    function album()
    {
        return $this->hasMany(Album::class);
    }
}
