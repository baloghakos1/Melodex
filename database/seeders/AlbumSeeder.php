<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    const ITEMS = [
        ["The Life of a Showgirl","","2025","POP","1"],
        ["The Tortured Poets Department","","2024","POP","1"],
        ["Midnights","","2022","POP","1"],
        ["GNX","","2024","HIP-HOP","2"],
        ["Mr. Morale & the Big Steppers","","2022","HIP-HOP","2"],
        ["Damn","","2017","HIP-HOP","2"],
        ["The Car","","2022","INDIE","3"],
        ["Tranquility Base Hotel + Casino","","2018","INDIE","3"],
        ["AM","","2018","INDIE","3"],
        ["Cowboy Carter","","2024","Country","4"],
        ["Renaissance","","2022","POP","4"],
        ["Lemonade","","2016","POP","4"],
        ["A Moon Shaped Pool","","2016","ROCK","5"],
        ["The King of Limbs","","2011","ELECTRONICA","5"],
        ["In Rainbows","","2007","ROCK","5"],
        ["Debí Tirar Más Fotos","","2025","PLENA","6"],
        ["Nadie Sabe Lo Que Va a Pasar Mañana","","2023","LATIN TRAP","6"],
        ["Un Verano Sin Ti","","2022","REGGAETON","6"],
        ["Hit Me Hard and Soft","","2024","POP","7"],
        ["Happier Than Ever","","2021","POP","7"],
        ["When We All Fall Asleep, Where Do We Go?","","2019","POP","7"],
        ["But Here We Are","","2023","ROCK","8"],
        ["Medicine at Midnight","","2021","ROCK","8"],
        ["Concrete and Gold","","2017","ROCK","8"],
        ["Born Pink","","2022","POP","9"],
        ["The Album","","2020","POP","9"],
        ["Blonde","","2016","R&B","10"],
        ["Channel Orange","","2013","R&B","10"],
    ];
    public function run(): void
    {
        foreach (self::ITEMS as $item) {
            $album = new Album();
	        $album->name = $item[0];
            $album->cover = $item[1];
            $album->year = $item[2];
            $album->genre = $item[3];
            $album->artist_id = $item[4];
            $album->save();
        }
    }
}
