<?php
if(isset($_GET['remove'])){
    $j = json_decode(file_get_contents('../request/'.$_GET['id']));
    unset($j[array_search($_GET['remove'], $j)]);
    file_put_contents("../request/".$_GET['id'], json_encode($j));
}
else {
    echo file_get_contents('../request/'.$_GET['id']);
}
