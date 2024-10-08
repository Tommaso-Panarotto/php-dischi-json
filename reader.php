<?php

//read file and scructure as associative array
$records = json_decode(file_get_contents("./db/dischi.json"), true);

header("Content-Type: application/json");

echo json_encode($records);
