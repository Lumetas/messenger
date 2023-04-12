<?php
if (!isset($_COOKIE['token'])){
if (!isset($_COOKIE['id'])){
    header('Location: auth.php');
}}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>lum-messenger</title>
  <meta name="description" content="Safe enough">
  <meta name="author" content="lumetas">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
     
     <script src='js/ende.js'></script>
     <script src='js/aes.js'></script>
     <script src='js/md5.js'></script>
     <script src='js/base64.js'></script>
     <script src='js/ajax.js'></script>
     <script src='js/functions.js'></script>
     <script>
    const id = <?php echo $_COOKIE['id']; ?>;
    document.getElementById('mainId').innerHTML = id;
    let chatid = 0;
     </script>
     </head>
<body id='documentBody'>
     <script src='js/version.js'></script>
     </body>
     
</html>
