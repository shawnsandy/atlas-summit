<?php
    namespace App\Summit;

    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 5/23/2017
     * Time: 8:28 PM
     */
    class Forms
    {

        public function activation(){
            $from = [
                "email" => ["label" => "Your email address", "type" => "email"],
                "password" => ["label" => "Your Password", "type" => "password"],
            ];

            return $from;

        }

    }
