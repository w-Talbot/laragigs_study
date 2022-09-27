<?php

namespace App\Models;

class Site{

    public static function all(){
        return [
            [
            'id' => 1,
            'site_id' => 1,
            'site_name' => 'John Radcliffe Hospital'
            ],
            [
                'id' => 2,
                'site_id' => 2,
                'site_name' => 'sacred heart'
            ],
            [
                'id' => 3,
                'site_id' => 3,
                'site_name' => 'johns hopkins'
            ]
            ];

    }

    public static function find($id){
        $sites = self::all();

        foreach($sites as $site){
            if($site['id'] == $id){
                return $site;
            }
        }
    }

}
