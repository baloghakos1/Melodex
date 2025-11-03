<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song_Playlist extends Model
{
    public $timestamps = false;

    public function playlist()
    {
        return $this->belongsTo(Playlist::class, 'playlist_id');
    }

    public function song()
    {
        return $this->belongsTo(Song::class, 'song_id');
    }
}
