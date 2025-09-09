<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    const ITEMS = [
        ["Alex Turner","Vocals","1986","3"],
        ["Jamie Cook","Guitarist","1985","3"],
        ["Matt Helders","Drummer","1986","3"],
        ["Nick O'Malley","Bassist","1985","3"],
        ["Thom Yorke","Vocals","1968","5"],
        ["Colin Greenwood","Bassist","1969","5"],
        ["Phil Selway","Drummer","1967","5"],
        ["Ed O'Brien","Guitarist","1968","5"],
        ["Jonny Greenwood","Guitarist","1971","5"],
        ["Dave Grohl","Drummer","1969","8"],
        ["Nate Mendel","Bassist","1968","8"],
        ["Pat Smear","Guitarist","1959","8"],
        ["Chris Shiflett","Guitarist","1971","8"],
        ["Rami Jaffee","Keyboardist","1969","8"],
        ["Jisoo","Vocals","1995","9"],
        ["Jennie","Vocals","1996","9"],
        ["Rosé","Vocals","1997","9"],
        ["Lisa","Vocals","1997","9"]
    ];
    public function run(): void
    {
        foreach (self::ITEMS as $item) {
            $member = new Member();
	        $member->name = $item[0];
	        $member->instrument = $item[1];
	        $member->year = $item[2];
            $member->artist_id = $item[3];
            $member->save();
        }
    }
}
