<?php
    $id1 = $_GET['id1'];
    $id2 = $_GET['id2'];
if(file_exists("../../dialogs/$id1-$id2")){
    echo file_get_contents("../../dialogs/$id1-$id2");

}

elseif(file_exists("../../dialogs/$id2-$id1")){
    echo file_get_contents("../../dialogs/$id2-$id1");
}
else{
    echo "[]";

}
