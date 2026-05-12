<?php

header('Content-Type: application/json');

$tours = [

    [
        "id" => 1,
        "name" => "Тур в Італію",
        "price" => 900
    ],

    [
        "id" => 2,
        "name" => "Тур у Францію",
        "price" => 850
    ],

    [
        "id" => 3,
        "name" => "Тур у Туреччину",
        "price" => 700
    ]

];

echo json_encode($tours);