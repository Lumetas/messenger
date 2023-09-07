<?php
if (!isset($_COOKIE['id'])){
    header('Location: auth.php');
    exit();
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>lum-messenger</title>
  <meta name="description" content="Safe enough">
  <meta name="author" content="lumetas">
    <link rel="manifest" href="pwa/pwalib.php?manifest" />
    <link rel="shortcut icon" type="image/png" href="image/ic_launcher_round.png"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="css/styles.css?v=1.0">
     <script src="pwa/pwalib.php?js"></script>
     <script src='js/ende.js'></script>
     <script src='js/aes.js'></script>
     <script src='js/md5.js'></script>
     <script src='js/base64.js'></script>
     <script src='js/ajax.js'></script>
     <script src='js/functions.js'></script>
     <script src='js/version.js'></script>
     <script src='js/sendfriend.js'></script>
     <script>
    //installEvent.prompt();
    const id = '<?php echo $_COOKIE['id']; ?>';
    document.getElementById('mainId').innerHTML = id;
    let chatid = 0;
     </script>
     </head>
         <body style='background:url(image/load.webp) no-repeat center center fixed; background-color: black;' id='documentBody' onload='getFormat(1);'>
     
     </body>
     
</html>
