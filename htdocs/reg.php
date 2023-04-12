<?php
if (isset($_GET['reg'])){
        $id = rand(100000000, 999999999);
        $token = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 0, 20);
        file_put_contents('../users/'.$token, $id);
        echo json_encode([$token, $id]);
        exit();
    }
    ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>regestration</title>
  <link rel="stylesheet" href="css/styles.css?v=1.0">
     <script src='js/ajax.js'></script>
</head>
<body align='center' style='background:black;'>
<button onclick='reg()' style='background:rgb(37,37,37); color:white; '>Зарегестрироваться</button>
<br><br>

     <div id='token' style=' color:white;' ></div><br>
     <div id='userId' style=' color:white;' ></div>
     <script>
function reg(){
     lumAjax({
             url: 'reg.php?reg=1',
                 success:function(data){
                     a = JSON.parse(data);
                     document.getElementById('token').innerHTML = a[0];
                     document.getElementById('userId').innerHTML = a[1];
                 }

         });}
     </script>
         <a href='auth.php' style='color:white; position:absolute;; bottom: 5%'>Авторизация</a>
</body>
</html>
