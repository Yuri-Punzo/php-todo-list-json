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

if (isset($_POST['task'])) {

    $task = [
        'text' => $_POST['task'],
        'done' => false,
    ];
    array_push($tasks, $task);
    /* $json_tasks = json_encode($all_tasks);
    file_put_contents('tasks.json', $json_tasks); */
}

header('Content-Type: application/json');
echo json_encode($tasks);
