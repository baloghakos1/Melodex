<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    const ITEMS = [
        1 => ["Taylor Swift", "American"],
        2 => ["Kendrick Lamar", "American"],
        3 => ["Arctic Monkeys", "British"],
        4 => ["Beyoncé", "American"],
        5 => ["Radiohead", "British"],
        6 => ["Bad Bunny", "Puerto Rican"],
        7 => ["Billie Eilish", "American"],
        8 => ["Foo Fighters", "American"],
        9 => ["BLACKPINK", "South Korean"],
        10 => ["Frank Ocean", "American"]
    ];
    public function run(): void
    {
        foreach (self::ITEMS as $item) {
            $artist = new Artist();
	        $artist->name = $item[0];
            $artist->nationality = $item[1];
            $artist->save();
        }
    }
}
