<?php
namespace App\Models;

class Listing{
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'text here written whatever it is a desctiption. example...'
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'text here written whatever it is a desctiption. example...'
            ]
        ];
    }

    public static function find($id){
//        self refers here to the Listings::
        $listings = self::all();

        foreach ($listings as $listing) {
            if($listing['id'] == $id){
                return $listing;
            }

        }
    }
}
