<?php
$id = $_COOKIE['id'];
$newId = $_POST['id'];
$token = $_POST['token'];
$errSym = str_split('~!@#$%^&*()_+-="№;:?".></,'."'");
$newId = str_replace($errSym, '', $newId);
//echo $newId.'<br>';
if (file_exists("../../users/$token") & !file_exists("../../id/$newId")){
 
        file_put_contents("../../users/$token", $newId);
        unlink("../../id/$id");
        file_put_contents("../../id/$newId", $token);
        foreach(glob("../../dialogs/*-$id") as $file) {
            echo $file.'<br>'.str_replace($id, $newId, $file).'<br><br>';
            rename($file, str_replace($id, $newId, $file));
	}
        echo '<br>'.'<br>';
                foreach(glob("../../dialogs/$id-*") as $file) {
                    echo $file.'<br>'.str_replace($id, $newId, $file).'<br><br>';
                    rename($file, str_replace($id, $newId, $file));
	}
unset($_COOKIE['id']);
setcookie('id', null, -1, '/');
setcookie("id", $newId, time()+(60*60*24*30));
header("Location: /");



        
    

}

else{
echo <<<OUT

<script>
alert('Ошибка');
window.location.href = '/';

</script>


OUT;


}


//else {echo 1;}
