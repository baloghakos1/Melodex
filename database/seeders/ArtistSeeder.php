<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    const ITEMS = [
        ["Taylor Swift", "American", "taylor_swift.jpg"],
        ["Kendrick Lamar", "American", "kendrick_lamar.jpg"],
        ["Arctic Monkeys", "British", "arctic_monkeys.jpg"],
        ["Beyoncé", "American", "beyonce.jpg"],
        ["Radiohead", "British", "radiohead.jpg"],
        ["Bad Bunny", "Puerto Rican", "bad_bunny.jpg"],
        ["Billie Eilish", "American", "billie_eilish.jpg"],
        ["Foo Fighters", "American", "foo_fighters.jpg"],
        ["BLACKPINK", "South Korean", "blackpink.jpg"],
        ["Frank Ocean", "American", "frank_ocean.jpg"]
    ];
    public function run(): void
    {
        foreach (self::ITEMS as $item) {
            $artist = new Artist();
	        $artist->name = $item[0];
            $artist->nationality = $item[1];
            $artist->image = $item[2];
            $artist->save();
        }
    }
}
