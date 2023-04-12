<?php
function addMess($arr, $mess){
    $i = 1;
    $a = [];
    if (count($arr) >= 20){
    while ($i < 20):
        array_push($a, $arr[$i]);
        $i += 1;
        endwhile;
    
        array_push($a, $mess);
        return $a;
    }
    else{
        array_push($arr, $mess);
        return $arr;
    }
    }


$id1 = $_GET['id1'];
$id2 = $_GET['id2'];
$data = $_GET['data'];
if(file_exists("../../dialogs/$id1-$id2")){
    $d = json_decode(file_get_contents("../../dialogs/$id1-$id2"));
    $d = json_encode(addMess($d, $data));
    file_put_contents("../../dialogs/$id1-$id2", $d);
    echo 1;
}

elseif(file_exists("../../dialogs/$id2-$id1")){
    $d = json_decode(file_get_contents("../../dialogs/$id2-$id1"));
    $d = json_encode(addMess($d, $data));
    file_put_contents("../../dialogs/$id2-$id1", $d);
    echo 1;
}
else{
    file_put_contents("../../dialogs/$id1-$id2", json_encode([$data]));
    echo 1;
}
