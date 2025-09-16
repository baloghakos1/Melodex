<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    const ITEMS = [
        ["Alex Turner","Vocals","1986","3","https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Alex_Turner_%28musician%29_2011.jpg/250px-Alex_Turner_%28musician%29_2011.jpg"],
        ["Jamie Cook","Guitarist","1985","3","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVofAEEcpowK8a1Nk1Ah6M6NS0RRmJue0ggg&s"],
        ["Matt Helders","Drummer","1986","3","https://images.radiox.co.uk/images/649844?width=2500&crop=1_1&signature=YTKsOabM9aeRhteYLiMgTlfXJ-w="],
        ["Nick O'Malley","Bassist","1985","3","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwPHZ0WJogVVYbzLhtl0BzKUq8J3tUIcFONg&s"],
        ["Thom Yorke","Vocals","1968","5","https://highprofiles.info/wp-content/uploads/2016/04/Yorke-main-900x600.jpg"],
        ["Colin Greenwood","Bassist","1969","5","https://upload.wikimedia.org/wikipedia/commons/a/a4/CGreenwood2006-06Radiohead.jpg"],
        ["Phil Selway","Drummer","1967","5","https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRmp6ll4uMUH0neV9rkhWNkg4nefQy9JIRTcUgSvXkpxjkWsrun8zbarUY_PqGOnKFPjwyNDdUYop7x8oulf9B5-T84nAH25kKo5KNaVA"],
        ["Ed O'Brien","Guitarist","1968","5","https://wp.tmw.ee/wp-content/uploads/2023/02/ed_obrien.jpg"],
        ["Jonny Greenwood","Guitarist","1971","5","https://m.media-amazon.com/images/M/MV5BMjhmODRiMmUtMGUyNC00NjRmLTliOTctODI3Zjc3OGQyOWVhXkEyXkFqcGc@._V1_.jpg"],
        ["Dave Grohl","Drummer","1969","8","https://hips.hearstapps.com/hmg-prod/images/gettyimages-473927948.jpg?crop=1xw:1.0xh;center,top&resize=640:*"],
        ["Nate Mendel","Bassist","1968","8","https://cdn.gethypervisual.com/images/shopify/d383b293-a833-40a9-b1ac-8b8e380462d3/w1200_4f9e_Screen_Shot_2017-12-13_at_09.png"],
        ["Pat Smear","Guitarist","1959","8","https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Glasto2023_%2830_of_468%29_%2853008354952%29_%28cropped%29.jpg/960px-Glasto2023_%2830_of_468%29_%2853008354952%29_%28cropped%29.jpg"],
        ["Chris Shiflett","Guitarist","1971","8","https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/FoosLollBerlin190917-11_%28cropped%29.jpg/250px-FoosLollBerlin190917-11_%28cropped%29.jpg"],
        ["Rami Jaffee","Keyboardist","1969","8","https://image.tmdb.org/t/p/w500/3KuxgPDYEMBiiIRcodcrCVVw9rv.jpg"],
        ["Jisoo","Vocals","1995","9","https://upload.wikimedia.org/wikipedia/commons/f/fd/Jisoo_of_Blackpink_at_a_Dior_event%2C_April_18%2C_2025_%283%29.png"],
        ["Jennie","Vocals","1996","9","https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Blackpink%27s_Jennie_in_Chanel_Coco_Crush%2C_July_3%2C_2024_%281%29.png/250px-Blackpink%27s_Jennie_in_Chanel_Coco_Crush%2C_July_3%2C_2024_%281%29.png"],
        ["Rosé","Vocals","1997","9","https://upload.wikimedia.org/wikipedia/commons/b/b3/Blackpink_Ros%C3%A9_Rimowa_1.jpg"],
        ["Lisa","Vocals","1997","9","https://upload.wikimedia.org/wikipedia/commons/7/74/20240314_Lisa_Manoban_12_%28cropped%29.jpg"]
    ];
    public function run(): void
    {
        foreach (self::ITEMS as $item) {
            $member = new Member();
	        $member->name = $item[0];
	        $member->instrument = $item[1];
	        $member->year = $item[2];
            $member->artist_id = $item[3];
            $member->image = $item[4];
            $member->save();
        }
    }
}
