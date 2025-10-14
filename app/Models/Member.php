<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }

    protected $fillable = [
        'name',
        'instrument',
        'year',
        'artist_id',
        'image'
    ];
}
