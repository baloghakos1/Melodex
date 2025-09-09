<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    const ITEMS = [
        ["Nikes","","Christopher Breaux","27"],
        ["Ivy","","Christopher Breaux","27"],
        ["Pink + White","","Christopher Breaux","27"],
        ["Be Yourself","","Buddy Ross","27"],
        ["Solo","","Christopher Breaux","27"],
        ["Skyline To","","Christopher Breaux","27"],
        ["Self Control","","Christopher Breaux","27"],
        ["Good Guy","","Christopher Breaux","27"],
        ["Nights","","Christopher Breaux","27"],
        ["Solo (Reprise)","","André Benjamin","27"],
        ["Pretty Sweet","","Christopher Breaux","27"],
        ["Facebook Story","","Sebastian Akchoté","27"],
        ["Close to You","","Christopher Breaux","27"],
        ["White Ferrari","","Christopher Breaux, Kanye West","27"],
        ["Seigfried","","Christopher Breaux","27"],
        ["Godspeed","","Christopher Breaux","27"],
        ["Futura Free","","Christopher Breaux","27"],
        ["Start","","Christopher Breaux","28"],
        ["Thinkin Bout You","","Christopher Breaux","28"],
        ["Fertilizer","","James Fauntleroy","28"],
        ["Sierra Leone","","Christopher Breaux","28"],
        ["Sweet Life","","Christopher Breaux","28"],
        ["Not Just Money","","Rosie Watson","28"],
        ["Super Rich Kids","","Christopher Breaux","28"],
        ["Pilot Jones","","Christopher Breaux","28"],
        ["Crack Rock","","Christopher Breaux","28"],
        ["Pyramids","","Christopher Breaux","28"],
        ["Lost","","Christopher Breaux","28"],
        ["White","","Christopher Breaux","28"],
        ["Monks","","Christopher Breaux","28"],
        ["Bad Religion","","Christopher Breaux","28"],
        ["Pink Matter","","Christopher Breaux","28"],
        ["Forest Gump","","Christopher Breaux","28"],
        ["End","","Christopher Breaux","28"],
        
    ];
    public function run(): void
    {
        foreach (self::ITEMS as $item) {
            $song = new Song();
	        $song->name = $item[0];
            $song->lyrics = $item[1];
            $song->songwriter = $item[2];
            $song->album_id = $item[3];
            $song->save();
        }
    }
}
