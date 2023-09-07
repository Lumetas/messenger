<?php include('style.php/pc.php'); $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/addchat.php';?>
<div id='abonent' style='disply:none;'>none</div>
       <div id='mainId' style='display:none;'></div>
<div id='listOfDialogs' class='listOfDialogs'></div>
    
          <div class='chatWindow'>
<div class='chatId'>
          <span
       style='position:absolute; top:0.5vh; font-size:2.5vh; left:20px; color:white; text-decoration: underline dotted;' id='chatId' onclick="k = prompt('key: '); if(k !== null){localStorage['key-' + this.innerHTML] = k}"></span><span onclick="if(confirm('Вы уверены что хотите удалить историю?')){removeChatHist()}" id='deleteChatHist' style='
    position: relative;
    right: -95%;
    top: -20%;
    cursor:pointer;
    user-select:none;
    font-size:calc(4vh);

'></span>
         
          </div>
          
              <textarea type='text' id='messIn' onkeyup='plsEnter(event)' class='messIn'></textarea>
       
    <button onclick="sendMsg(); refreshChat(); document.getElementById('messIn').value = ''; messIn.focus();" class='sendBut'>➤</button>
       
    <div class='hist' id='hist' style=''></div>
    </div>

          <div class='menu' align='center'>

          <p onclick='showSettings()' id='showSettingsBut' class='menBut'>S</p>
          <p id='addChat' class='menBut' onclick='addChat()'>+</p>

          </div>



<div style='
display:none;
    top: 0px;
    left: 58vw;
    position: absolute;
    height: 100vh;
    width: 20vw;
    background: #121212;
    color: white;
    z-index: 2;
    
' id='friendRequests'>


       </div>
       
<div class='settings' style='overflow-y:auto; overflow-x:hidden; border-left: 1px solid white; border-right: 1px solid white;' id='settings'>
          <img class='qr'  src='https://chart.googleapis.com/chart?cht=qr&chl=<?php echo $url.'?id='.$_COOKIE['id'] ;?>&chs=180x180&choe=UTF-8&chld=L%7C2' alt='https://chart.googleapis.com/chart?cht=qr&chl=<?php echo $url.'?id='.$_COOKIE['id'] ;?>&chs=300x300&choe=UTF-8&chld=L%7C2'></img>

          
      




       <div onclick='openRequests(true)' id='mId' title='Нажмите чтобы посмотреть запросы на общение' align='center' style='cursor:pointer' class='setblock' ><?php echo $_COOKIE['id']; ?></div>


           
           

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
    left: 0px;
    width: calc(100% - 8px);
    height: 50px;
    font-size: 45px;
    border: 1px solid grey;
    
    outline: 0px solid #1C6EA4;
    outline-offset: 0px;


}

       </style>
<br>
           

<span align='center' class='setblock' style='padding:2%; left:0%;'>Импорт/Экспорт Контактов</span><br>

<textarea id='chatsArea' class='keyArea'></textarea><br><br>
          <button onclick='saveChats()' class='changeId'>Сохранить</button>

<br><br><hr class='hr'><br>




<input id='file' type='file' accept="image/*" style='display:none'
     onchange="document.getElementById('showedFile').innerHTML = this.files[0].name; getBase64(this.files[0]);"
     >

       <button class='changeId' style='height:max-content;' onclick="document.getElementById('file').click()" id='showedFile'>Обои(До 2 МБ)</button>
      <br><br>
       
       <button class='changeId' onclick='installEvent.prompt()' style='height:max-content; ' >Установить приложение</button><br><br><br>
       
          </div>

