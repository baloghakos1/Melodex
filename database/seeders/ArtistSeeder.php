<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    const ITEMS = [
        1 => ["Taylor Swift", "American","no"],
        2 => ["Kendrick Lamar", "American","no"],
        3 => ["Arctic Monkeys", "British","yes"],
        4 => ["Beyoncé", "American","no"],
        5 => ["Radiohead", "British","yes"],
        6 => ["Bad Bunny", "Puerto Rican","no"],
        7 => ["Billie Eilish", "American","no"],
        8 => ["Foo Fighters", "American","yes"],
        9 => ["BLACKPINK", "South Korean","yes"],
        10 => ["Frank Ocean", "American","no"]
    ];
    public function run(): void
    {
        foreach (self::ITEMS as $item) {
            $artist = new Artist();
	        $artist->name = $item[0];
            $artist->nationality = $item[1];
            $artist->is_band = $item[2];
            $artist->save();
        }
    }
}
