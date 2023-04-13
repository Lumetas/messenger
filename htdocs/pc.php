<?php include('style.php/pc.php'); ?>
<div id='abonent' style='disply:none;'>none</div>
       <div id='mainId' style='display:none;'></div>
<div id='listOfDialogs' class='listOfDialogs'></div>
    
          <div class='chatWindow'>
<div class='chatId'>
          <span style='position:absolute; top:0.5vh; font-size:2.5vh; left:20px; color:white;' id='chatId'></span>
          <span style='position:absolute; top:0.5vh; font-size:2.5vh; right:20px; color:white;'><?php echo $_COOKIE['id']; ?></span>
          </div>
          
              <input type='text' id='messIn' onkeyup='plsEnter(event)' class='messIn'>
    <button onclick="sendMsg(); refreshChat(); document.getElementById('messIn').value = ''; messIn.focus();" class='sendBut'>➤</button>
    <div class='hist' id='hist' style='overflow-y: auto;overflow-x: hidden;'></div>
    </div>

          <div class='menu' align='center'>

          <p onclick='showSettings()' class='menBut'>S</p>
          <p id='addChat' class='menBut' onclick='addChat()'>+</p>

          </div>
    
<div class='settings' id='settings'>
          
<span class='closeSettings' onclick='closeSettings()'>✖</span>
          
          <p style='position:relative; left:40px; width:min-content;'>Ключ:</p> 
<textarea id='keyArea' class='keyArea'></textarea><br><br><br>
          <button onclick='saveKey()' class='saveKeyBut'>Сохранить</button>


<br><br><br><form action='php/changeId.php' method='post'>
<input class='changeId' type='text' name='token' placeholder='token'><br><br>
       
<input class='changeId' type='text' name='id' placeholder='new id'><br><br><br>
<input class='changeId' type='submit' value='Сохранить'>
       </form>
<style>
       .changeId{
    background:rgb(37,37,37);
    color:white;
    position:relative;
    left:40px;
    outline: 0px solid #1C6EA4;
    outline-offset: 0px;


}

       </style>
<br><br><br>
          <p style='position:relative; left:40px; width:max-content;'>Импорт/экспорт контактов:</p> 
<textarea id='chatsArea' class='keyArea'></textarea><br><br><br>
          <button onclick='saveChats()' class='saveKeyBut'>Сохранить</button>


           
       
          </div>

