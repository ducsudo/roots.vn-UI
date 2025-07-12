<?php
$arr = [
    "list_mission"=> [
            "1748855348119" => ["image"=>"image","title"=>null,"desc"=>null,"content"=>null],
            "1748855357302" => ["image"=>"image","title"=>null,"desc"=>null,"content"=>null],
            "1748855339" => ["image"=>"image","title"=>null,"desc"=>null,"content"=>null]
    ],
    "list_value"=> [
        "1748855350830" => ["image"=>"image","title"=>null,"desc"=>null,"content"=>null],
        "1748855352176" => ["image"=>"image","title"=>null,"desc"=>null,"content"=>null],
        "1748855339" => ["image"=>"image","title"=>null,"desc"=>null,"content"=>null]
    ]
];

    $keys = array_keys($arr);
    print_r($keys); // Array ( [0] => list_mission [1] => list_value )

