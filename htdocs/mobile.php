<?php include('style.php/mobile.php'); ?>
<div id='abonent' style='disply:none;'>none</div>
       <div id='mainId' style='display:none;'></div>
<div id='listOfDialogs' class='listOfDialogs'></div>
    
          <div onclick='document.documentElement.requestFullscreen();' id='chatWindow' class='chatWindow'>
<div class='chatId'>
          <span style='position:absolute; top:5px; left: 10px; color:white;' onclick='showDialog(0); document.exitFullscreen();'>ᐊ</span>
          <span style='position:absolute; top:5px; left:100px; color:white;' id='chatId'></span>
          <span style='position:absolute; top:5px; right:20px; color:white;'><?php echo $_COOKIE['id']; ?></span>
          </div>
          
              <input onfocus='document.documentElement.requestFullscreen();' type='text' id='messIn' onkeyup='plsEnter(event)' class='messIn'>
    <button id='sendBut' onclick="sendMsg(); refreshChat(); document.getElementById('messIn').value = ''; messIn.focus();" class='sendBut'>➤</button>
    <div class='hist' id='hist' style='overflow-y: auto;overflow-x: hidden;'></div>
    </div>

          <div class='menu' align='center'>

          <span onclick='showSettings()' class='menBut'>&nbsp;S&nbsp;</span>
       <span> &nbsp; &nbsp; &nbsp;   <?php echo $_COOKIE['id']; ?> &nbsp; &nbsp; &nbsp; &nbsp;</span>
          <span id='addChat' class='menBut' onclick='addChat()'>&nbsp;+&nbsp;</span>

          </div>
    
<div style='overflow-y:auto; overflow-x:hidden;' class='settings' id='settings'>
          
<span class='closeSettings' onclick='closeSettings()'>✖</span>
          
          <p style='position:relative; left:10vw; width:min-content;'>Ключ:</p> 
<textarea id='keyArea' class='keyArea'></textarea><br><br><br>
          <button onclick='saveKey()' class='saveKeyBut'>Сохранить</button>



<br><br><hr><br><br>
<form action='php/changeId.php' method='post'>
<p style='position:relative; left:10vw; width:max-content;'>Сменить ID:</p> 
<input class='changeId' type='text' name='token' placeholder='token'><br><br>
       
<input class='changeId' type='text' name='id' placeholder='new id'><br><br><br>
<input class='changeId' type='submit' value='Сохранить'><br><br>
       </form>
<style>
       .changeId{
    background:rgb(37,37,37);
    color:white;
    position:relative;
    left:10vw;
    outline: 0px solid #1C6EA4;
    outline-offset: 0px;
    font-size: 150%;
    width:80vw;


}

       </style>
<br><br><hr><br><br>
          <p style='position:relative; left:10vw; width:max-content;'>Импорт/экспорт контактов:</p> 
<textarea id='chatsArea' class='keyArea'></textarea><br><br><br>
          <button onclick='saveChats()' class='saveChatsBut'>Сохранить</button>

<br><br><br>
                                                                          
          </div>

