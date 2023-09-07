<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>document</title>
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
<body>
<input id='file' type='file' accept="image/*" style='display:none'
     onchange="document.getElementById('showedFile').innerHTML = this.files[0].name; getBase64(this.files[0]);"
     >
     
<button onclick="document.getElementById('file').click()" id='showedFile'>Выберите изображение</button>
<div id='data' style='display:none'></div>
     <script>
document.querySelector('body').style.background = 'url(' + localStorage['bg'] + ')'
function getBase64(file) {
   var reader = new FileReader();
   reader.readAsDataURL(file);
   reader.onload = function () {
       console.log(reader.result);
       set(reader.result);
       localStorage['bg'] = reader.result;
       //window.location.href = reader.result;
       
   };
   reader.onerror = function (error) {
     console.log('Error: ', error);
   };
}
     function set(data){
         document.getElementById('data').innerHTML = data;

     }
function get(){
return document.getElementById('data').innerHTML
}
     </script>
</body>
</html>
