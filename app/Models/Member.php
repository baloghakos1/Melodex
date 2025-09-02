<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;

    function artists()
    {
        return $this->belongsTo(Artist::class);
    }

}
