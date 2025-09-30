<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    const ITEMS = [
        ["The Life of a Showgirl","https://upload.wikimedia.org/wikipedia/en/thumb/f/f4/Taylor_Swift_%E2%80%93_The_Life_of_a_Showgirl_%28album_cover%29.png/250px-Taylor_Swift_%E2%80%93_The_Life_of_a_Showgirl_%28album_cover%29.png","2025","POP","1"],
        ["The Tortured Poets Department","https://upload.wikimedia.org/wikipedia/en/6/6e/Taylor_Swift_%E2%80%93_The_Tortured_Poets_Department_%28album_cover%29.png","2024","POP","1"],
        ["Midnights","https://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Midnights_-_Taylor_Swift.png/250px-Midnights_-_Taylor_Swift.png","2022","POP","1"],
        ["GNX","https://i.scdn.co/image/ab67616d0000b273d9985092cd88bffd97653b58","2024","HIP-HOP","2"],
        ["Mr. Morale & the Big Steppers","https://upload.wikimedia.org/wikipedia/hu/c/ca/Kendrick_Lamar_-_Mr._Morale_%26_the_Big_Steppers_%28album_cover%29.jpeg","2022","HIP-HOP","2"],
        ["Damn","https://upload.wikimedia.org/wikipedia/hu/e/e8/Kendrick_Lamar_-_Damn_%28album_cover%29.png","2017","HIP-HOP","2"],
        ["The Car","https://upload.wikimedia.org/wikipedia/en/5/5e/The_Car_by_Arctic_Monkeys_album.jpg","2022","INDIE","3"],
        ["Tranquility Base Hotel + Casino","https://upload.wikimedia.org/wikipedia/en/thumb/3/38/Arctic_Monkeys_%E2%80%93_Tranquility_Base_Hotel_%26_Casino.png/250px-Arctic_Monkeys_%E2%80%93_Tranquility_Base_Hotel_%26_Casino.png","2018","INDIE","3"],
        ["AM","https://upload.wikimedia.org/wikipedia/commons/e/e7/%22AM%22_%28Arctic_Monkeys%29.jpg","2018","INDIE","3"],
        ["Cowboy Carter","https://upload.wikimedia.org/wikipedia/en/a/aa/Beyonc%C3%A9_-_Cowboy_Carter.png","2024","Country","4"],
        ["Renaissance","https://upload.wikimedia.org/wikipedia/en/thumb/8/83/Renaissance_LP_Cover_Art.png/250px-Renaissance_LP_Cover_Art.png","2022","POP","4"],
        ["Lemonade","https://upload.wikimedia.org/wikipedia/en/5/53/Beyonce_-_Lemonade_%28Official_Album_Cover%29.png","2016","POP","4"],
        ["A Moon Shaped Pool","https://i.scdn.co/image/ab67616d0000b27345643f5cf119cbc9d2811c22","2016","ROCK","5"],
        ["The King of Limbs","https://upload.wikimedia.org/wikipedia/en/a/a2/Radioheadthekingoflimbs.png","2011","ELECTRONICA","5"],
        ["In Rainbows","https://upload.wikimedia.org/wikipedia/en/1/14/Inrainbowscover.png","2007","ROCK","5"],
        ["Debí Tirar Más Fotos","https://cdn-images.dzcdn.net/images/cover/d98eaccfbb945bdf68241d6de7fe6a49/0x1900-000000-80-0-0.jpg","2025","PLENA","6"],
        ["Nadie Sabe Lo Que Va a Pasar Mañana","https://i.scdn.co/image/ab67616d0000b2732ea1f035463d11e1fc3b193d","2023","LATIN TRAP","6"],
        ["Un Verano Sin Ti","https://media.pitchfork.com/photos/627425dbc85171592b8a6e6a/master/pass/Bad-Bunny-Un-Verano-Sin-Ti.jpg","2022","REGGAETON","6"],
        ["Hit Me Hard and Soft","https://upload.wikimedia.org/wikipedia/hu/3/37/Billie_Eilish_-_Hit_Me_Hard_and_Soft_%28album_cover%29.jpg","2024","POP","7"],
        ["Happier Than Ever","https://upload.wikimedia.org/wikipedia/en/4/45/Billie_Eilish_-_Happier_Than_Ever.png","2021","POP","7"],
        ["When We All Fall Asleep, Where Do We Go?","https://upload.wikimedia.org/wikipedia/hu/d/d5/Billie_Eilish_-_When_We_All_Fall_Asleep%2C_Where_Do_We_Go_%28album_cover%29.png","2019","POP","7"],
        ["But Here We Are","https://i.scdn.co/image/ab67616d0000b27384c85afa887f664fef3c5e8a","2023","ROCK","8"],
        ["Medicine at Midnight","https://upload.wikimedia.org/wikipedia/en/2/2f/Medicine_at_Midnight.jpeg","2021","ROCK","8"],
        ["Concrete and Gold","https://upload.wikimedia.org/wikipedia/en/e/e5/Concrete_and_Gold_Foo_Fighters_album.jpg","2017","ROCK","8"],
        ["Born Pink","https://upload.wikimedia.org/wikipedia/en/e/e7/Born_Pink_Digital.jpeg","2022","POP","9"],
        ["The Album","https://muzikercdn.com/uploads/products/14012/1401230/main_e36a3902.JPG","2020","POP","9"],
        ["Blonde","https://upload.wikimedia.org/wikipedia/en/a/a0/Blonde_-_Frank_Ocean.jpeg","2016","R&B","10"],
        ["Channel Orange","https://i.scdn.co/image/ab67616d0000b2737aede4855f6d0d738012e2e5","2013","R&B","10"],
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
