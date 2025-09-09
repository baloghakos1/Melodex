<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    const ITEMS = [
        ["Alex Turner","3"],
        ["Jamie Cook","3"],
        ["Matt Helders","3"],
        ["Nick O'Malley","3"],
        ["Thom Yorke","5"],
        ["Colin Greenwood","5"],
        ["Phil Selway","5"],
        ["Ed O'Brien","5"],
        ["Jonny Greenwood","5"],
        ["Dave Grohl","8"],
        ["Nate Mendel","8"],
        ["Pat Smear","8"],
        ["Chris Shiflett","8"],
        ["Rami Jaffee","8"],
        ["Jisoo","9"],
        ["Jennie","9"],
        ["Rosé","9"],
        ["Lisa","9"]
    ];
    public function run(): void
    {
        foreach (self::ITEMS as $item) {
            $member = new Member();
	        $member->name = $item[0];
            $member->artist_id = $item[1];
            $member->save();
        }
    }
}
