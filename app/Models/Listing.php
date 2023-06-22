<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return[
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eius officiis dolorum dignissimos officia dolor a. Expedita error illo laborum!'
                ],    
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, officia corrupti. Dolor amet a illo cupiditate dolorem dignissimos quasi in.'
                ],

            ];
        }
    }