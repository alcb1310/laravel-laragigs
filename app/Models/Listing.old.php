<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return  [
            [
                'id' => 1,
                'title' => 'Listing 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime eius voluptate consectetur, debitis repellat quis aperiam dicta sint sequi adipisci sit saepe error veritatis excepturi eligendi doloribus perferendis soluta, nemo delectus atque et voluptates voluptas? Cupiditate explicabo expedita dolorem ut!'
            ],
            [
                'id' => 2,
                'title' => 'Listing 2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime eius voluptate consectetur, debitis repellat quis aperiam dicta sint sequi adipisci sit saepe error veritatis excepturi eligendi doloribus perferendis soluta, nemo delectus atque et voluptates voluptas? Cupiditate explicabo expedita dolorem ut!'
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id) return $listing;
        }
    }
}
