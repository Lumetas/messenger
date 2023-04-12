<?php
    function encrypt($mess, $key){
    include('aes.php');
$cr = new AES;
$mess = base64_encode($mess);
$iv = [3, 4, 5, 1, 0, 2, 8, 2, 6, 6, 0, 2, 8, 7, 8, 7];
$i = 0;
$byteChars = [];
//while ($i < strlen($mess))
$chars = str_split($mess);
foreach($chars as $char){
    array_push($byteChars, ord($char));
}
$a = $cr->encrypt($byteChars, 0, $key, count(str_split($key)), $iv);
$a = $a['cipher'];
return $a;
}
function decrypt($mess, $key){
    include('aes.php');
$cr = new AES;
$iv = [3, 4, 5, 1, 0, 2, 8, 2, 6, 6, 0, 2, 8, 7, 8, 7];
$a = $cr->decrypt(json_decode($mess), count(str_split($key)), 0, $key, count(str_split($key)), $iv);
$b = [];
foreach($a as $char){
    array_push($b, chr($char));
}
$b = implode($b);
$b = base64_decode($b);
return $b;

}
