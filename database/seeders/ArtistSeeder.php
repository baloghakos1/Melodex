<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    const ITEMS = [
        ["Taylor Swift", "American", "taylor_swift.jpg","no"],
        ["Kendrick Lamar", "American", "kendrick_lamar.jpg","no"],
        ["Arctic Monkeys", "British", "arctic_monkeys.jpg","yes"],
        ["Beyoncé", "American", "beyonce.jpg","no","no","no"],
        ["Radiohead", "British", "radiohead.jpg","yes"],
        ["Bad Bunny", "Puerto Rican", "bad_bunny.jpg","no","no"],
        ["Billie Eilish", "American", "billie_eilish.jpg","no"],
        ["Foo Fighters", "American", "foo_fighters.jpg","yes"],
        ["BLACKPINK", "South Korean", "blackpink.jpg","yes"],
        ["Frank Ocean", "American", "frank_ocean.jpg","no"]
    ];
    public function run(): void
    {
        foreach (self::ITEMS as $item) {
            $artist = new Artist();
	        $artist->name = $item[0];
            $artist->nationality = $item[1];
            $artist->image = $item[2];
            $artist->is_band = $item[3];
            $artist->save();
        }
    }
}
