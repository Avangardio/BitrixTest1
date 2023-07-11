<?php

$result = [
    'isSuccess' => true,
    'text' => "user was typing: {$_POST['text']}",
];

header("Content-type: application/json; charset=utf-8");
echo json_encode($result);
