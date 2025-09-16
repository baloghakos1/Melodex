<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;

    function artist()
    {
        return $this->belongsTo(Artist::class);
    }

}
