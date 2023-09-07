<?php
$id1 = $_GET['id1'];
$id2 = $_GET['id2'];

if(file_exists("../../dialogs/$id1-$id2")){
    unlink("../../dialogs/$id1-$id2");
    echo 1;
}

elseif(file_exists("../../dialogs/$id2-$id1")){
    unlink("../../dialogs/$id2-$id1");
    echo 1;
}
else {echo 0;}
