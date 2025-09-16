<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;
    // Assuming the member's actual artist id is stored in 'member_artist_id'
    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }
    
}
