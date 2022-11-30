<?php
$tasks = [
    [
        "text" => "spazzare",
        "done" => false
    ],
    [
        "text" => "spolverare",
        "done" => false
    ],
    [
        "text" => "passare lo straccio",
        "done" => false
    ]
];

header("Content-Type: application/json");
echo json_encode($tasks);

/* if $added_task = $_GET("text");

var_dump($added_task);
 */