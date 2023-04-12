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
          <span class='menBut' onclick='addChat()'>&nbsp;+&nbsp;</span>

          </div>
    
<div class='settings' id='settings'>
          
<span class='closeSettings' onclick='closeSettings()'>✖</span>
          
          <p style='position:relative; left:40px; width:min-content;'>Ключ:</p> 
<textarea id='keyArea' class='keyArea'></textarea><br><br><br>
          <button onclick='saveKey()' class='saveKeyBut'>Сохранить</button>
          
          </div>

