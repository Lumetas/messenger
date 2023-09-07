<?php
if (isset($_GET['reg'])){
        $id = rand(100000000, 999999999);
        $token = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 0, 20);
        file_put_contents('../users/'.$token, $id);
        file_put_contents('../id/'.$id, $token);
        echo json_encode([$token, $id]);
        exit();
    }
    ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>regestration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
     <script src='js/ajax.js'></script>
</head>
<body align='center' style='background:black;'>
<button onclick='reg()' id='reg' style='background:rgb(37,37,37); color:white; '>Зарегестрироваться</button>
<br><br>

     <input disabled id='token' style='background:rgb(37,37,37); color:white; display:none;' ><br>
    <input disabled id='userId' style='background:rgb(37,37,37); color:white; display:none;' >
     <script>
function reg(){
     lumAjax({
             url: 'reg.php?reg=1',
                 success:function(data){
                     a = JSON.parse(data);
                     document.getElementById('userId').style.display = 'unset';
                     document.getElementById('token').style.display = 'unset';
                     
                     document.getElementById('token').value = a[0];
                     document.getElementById('userId').value = a[1];
                     document.getElementById('reg').style.display = 'none';
                 }

         });}
     </script>
         <a href='auth.php' style='color:white; position:absolute; bottom: 5%;
    left: 30vw;
    width: 40vw;'>Авторизация</a>
</body>
</html>
