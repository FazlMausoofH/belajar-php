<?php

$data = [
    "action" => "create",
    // "nonAction" => "Delete"
];
$action =$data["action"] ?? "Nothing";
$actions =$data["nonAction"] ?? "Nothing";


echo $action . PHP_EOL;
echo $actions

?>