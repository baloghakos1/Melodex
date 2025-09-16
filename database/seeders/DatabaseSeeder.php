<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(ArtistSeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(SongSeeder::class);
        $this->call(MemberSeeder::class);
    }
}
