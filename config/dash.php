<?php
/**
 * Created by PhpStorm.
 * User: Shawn
 * Date: 3/17/2017
 * Time: 6:13 PM
 */

return [

    /*
     *
     * Configure how forms/fields for each table are generated
     */

    'forms' => [

        "users" => [
            "field_types" => ["password" => "password", "id" => "hidden", "email" => "email", 'region_id' => 'select'],
            "labels" => [
                "password" => "Your Login Password",
                "email" => "Your Email",
                "region_id" => "Which CareerSource Region  Are You From"
            ],
            "options" => [
                'region_id' => ['', 'Suncoast', 'pascoHernando', 'Tampa', 'Miami']
            ]
        ],
        "workshops" => [
            "field_types" => ["date" => "date", 'cover_image' => 'file', 'start_time' => "time", 'end_time' => "time", ],
            "labels" => ["cover_image" => "Cover Image (jpg, png, Max (20mb)"]
        ]

    ]

];
