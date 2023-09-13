<?php $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/addchat.php'; ?>

<link rel="stylesheet" href="css/mobile.css">
         <link rel="stylesheet" href="css/menu.css">
         
<div id='abonent' style='disply:none;'>none</div>
       <div id='mainId' style='display:none;'></div>
<div id='listOfDialogs' class='listOfDialogs'></div>


         <input type="checkbox" id="chat-checkbox"/>
<div class="side-chat">
          <div onscroll='alert(1)' onclick='' id='chatWindow' class='chatWindow'>
<div id='topPanel' class='chatId'>
          <span id='backBut' style='position:absolute; top:5px; left: 10px; color:white;' onclick='showDialog(0);'>ᐊ</span>
          <span style='width:40%;position:absolute; top:5px; left:30%; color:white;text-decoration: underline dotted;' id='chatId' align='center' onclick="k = prompt('key: '); if(k !== null){localStorage['key-' + this.innerHTML] = k}"></span><span onclick="if(confirm('Вы уверены что хотите удалить историю?')){removeChatHist()}" id='deleteChatHist' style='
    position: relative;
    right: -92%;
    top: 1%;
    cursor:pointer;
    user-select:none;
    font-size:calc(4vh);

'></span>
          
          </div>
          
       <textarea onfocus='setTimeout("scrollHist();", 500); document.getElementById("topPanel").style.display = "none";' type='text' onblur='document.getElementById("topPanel").style.display = "unset"' id='messIn' autocomplete="off" x-autocompletetype='off' class='messIn'></textarea>

    <button id='sendBut' onclick="sendMsg(); refreshChat(); document.getElementById('messIn').value = ''; messIn.focus();" class='sendBut'>➤</button>
    <div class='hist' id='hist' style=''></div>
    </div>
</div>
          <div class='menu' align='center'>

          
       <span> &nbsp; &nbsp; &nbsp;   lum-messenger &nbsp; &nbsp; &nbsp; &nbsp;</span>
<label class="side-button-1" for="settings-checkbox"><span onclick='document.getElementById("settings").scrollTop = 0;' class='menBut opensettingsbut'>&nbsp;≡&nbsp;</span></label>



          





          </div>
    <span id='addChat' class='menBut addchatbut' onclick='addChat()'>&nbsp;+&nbsp;</span>


<div style='
display:none;
    top: 0px;
    left: 0vw;
    position: absolute;
    height: 100vh;
    width: 100vw;
    background: #121212;
    color: white;
    z-index: 10;
    
' id='friendRequests'>


       </div>
<input type="checkbox" id="settings-checkbox"/>
<div class="side-settings">
<div class='settings' style='overflow-y:auto; overflow-x:hidden; border-left: 1px solid white; border-right: 1px solid white;' id='settings'>
          <img class='qr'  src='https://chart.googleapis.com/chart?cht=qr&chl=<?php echo $url.'?id='.$_COOKIE['id'] ;?>&chs=180x180&choe=UTF-8&chld=L%7C2' alt='https://chart.googleapis.com/chart?cht=qr&chl=<?php echo $url.'?id='.$_COOKIE['id'] ;?>&chs=300x300&choe=UTF-8&chld=L%7C2'></img>

          
   




       <div id='mId' onclick='openRequests(true)' title='Нажмите чтобы посмотреть запросы на общение' align='center' style='cursor:pointer' class='setblock' ><?php echo $_COOKIE['id']; ?></div>

    <hr class='hr'>
    
<form  action='php/changeId.php' method='post'>
<div align='center' class='setblock'  style=''>Смена ID</div>       
       
<input class='changeId' type='text' name='token' placeholder='token'>
       
<input class='changeId' type='text' name='id' placeholder='new id'><br><br>
<input class='changeId' type='submit' value='Сохранить'>
       
       </form>
  <br><hr class='hr'>
<style>
       .changeId{
    margin:2px;
    background: rgb(37,37,37);
    color: white;
    position: relative;
    left: 4px;
    width: calc(100% - 8px);
    height: 50px;
    font-size: 45px;
    border: 1px solid grey;
    
    outline: 0px solid #1C6EA4;
    outline-offset: 0px;


}

       </style>
<br>
           
<br>
<span align='center' class='setblock' style='padding:2%; left:0%;'>Импорт/Экспорт Контактов</span><br><br>

<textarea id='chatsArea' class='keyArea'></textarea><br><br>
          <button onclick='saveChats()' class='changeId'>Сохранить</button>

<br><br><hr class='hr'><br>




<input id='file' type='file' accept="image/*" style='display:none'
     onchange="document.getElementById('showedFile').innerHTML = this.files[0].name; getBase64(this.files[0]);"
     >

       <button class='changeId' style='height:max-content;' onclick="document.getElementById('file').click()" id='showedFile'>Обои(До 2 МБ)</button>
      <br><br>
       
       <button class='changeId' onclick='installEvent.prompt()' style='height:max-content; ' >Установить приложение</button><br><br><br>
       
          </div></div>
