<?php
if (isset($_POST['token'])){
$token = $_POST['token'];
if(file_exists("../users/$token")){
setcookie("id", file_get_contents("../users/$token"), time()+(60*60*24*30));

header("Location: index.php");
}
else{
header("Location: auth.php"); 
}
}
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>document</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
<body align='center' style='background:black; color:white;'>

     <form action='auth.php' method='post'>

    <input name='token' placeholder='Введите токен' style='background:rgb(37,37,37); color:white; outline:none;'> 
  



     </form>

 <a href='reg.php' style='color:white; position:absolute; bottom: 5%;
    left: 30vw;
    width: 40vw;'>Регистрация</a
</body>
</html>
