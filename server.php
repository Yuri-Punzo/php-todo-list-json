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



/* if (isset($_POST["task"])) {
    var_dump($_POST["task"])
} */
header('Content-Type: application/json');
echo json_encode($tasks);
