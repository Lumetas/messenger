<?php include('style.php/pc.php'); ?>
<div id='abonent' style='disply:none;'>none</div>
       <div id='mainId' style='display:none;'></div>
<div id='listOfDialogs' class='listOfDialogs'></div>
    
          <div class='chatWindow'>
<div class='chatId'>
          <span style='position:absolute; top:5px; left:20px; color:white;' id='chatId'></span>
          <span style='position:absolute; top:5px; right:20px; color:white;'><?php echo $_COOKIE['id']; ?></span>
          </div>
          
              <input type='text' id='messIn' onkeyup='plsEnter(event)' class='messIn'>
    <button onclick="sendMsg(); refreshChat(); document.getElementById('messIn').value = ''; messIn.focus();" class='sendBut'>➤</button>
    <div class='hist' id='hist' style='overflow-y: auto;overflow-x: hidden;'></div>
    </div>

          <div class='menu' align='center'>

          <p onclick='showSettings()' class='menBut'>S</p>
          <p class='menBut' onclick='addChat()'>+</p>

          </div>
    
<div class='settings' id='settings'>
          
<span class='closeSettings' onclick='closeSettings()'>✖</span>
          
          <p style='position:relative; left:40px; width:min-content;'>Ключ:</p> 
<textarea id='keyArea' class='keyArea'></textarea><br><br><br>
          <button onclick='saveKey()' class='saveKeyBut'>Сохранить</button>
          
          </div>

