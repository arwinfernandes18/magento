<?php

namespace Form\Empmodule\Model;

class TestService implements \Form\Empmodule\Api\TestInterface
{

    public function getProfile()
    {
        return [
        
        [
            "firstname"=>"Arwin",
            "lastname"=>"Fernandes",
            "email"=>"arwin@gmail.com",
            "telephone"=>"9876543210",
            "city"=>"Mangalore",
            "state"=>"Karnataka",
            "country"=>"India",
        ],

        [
            "firstname"=>"Arwin",
            "lastname"=>"Fernandes",
            "email"=>"arwin@gmail.com",
            "telephone"=>"9876543210",
            "city"=>"Mangalore",
            "state"=>"Karnataka",
            "country"=>"India",
        ],
        [
            "firstname"=>"Rancy",
            "lastname"=>"Fernandes",
            "email"=>"arwin@gmail.com",
            "telephone"=>"9876543210",
            "city"=>"Mangalore",
            "state"=>"Karnataka",
            "country"=>"India",
        ],
    ];
    }
}

