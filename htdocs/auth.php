<?php
if (isset($_POST['token'])){
$token = $_POST['token'];
if(file_exists("../users/$token")){
setcookie("token", $token, time()+(60*60*24*30));
setcookie("id", file_get_contents("../users/$token"), time()+(60*60*24*30));

header("Location: index.php");}
}
else{
header("Location: auth.php"); 
}
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>document</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
<body align='center' style='background:black; color:white;'>

     <form action='auth.php' method='post'>

<input name='token' style='background:rgb(37,37,37); color:white;'>




     </form>

 <a href='reg.php' style='color:white; position:absolute;; bottom: 5%'>Регистрация</a
</body>
</html>
