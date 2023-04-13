<?php
$id = $_GET['id'];
if (file_exists("../../id/$id")){
echo 'true';
    }


    
    else{
        echo 'false';
    }
