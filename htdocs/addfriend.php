<?php
$friend = $_GET['friend'];
$id = $_GET['id'];
if(file_exists("../request/$friend")){
    $j = json_decode(file_get_contents("../request/$friend"));
    if(!in_array($id, $j)){
    $j[] = $id;
    file_put_contents("../request/$friend", json_encode($j));
    }}
else{
    $j = [$id];
    file_put_contents("../request/$friend", json_encode($j));
}
