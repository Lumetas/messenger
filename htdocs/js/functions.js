const font = window.outerHeight / 100 * 3 + 'px';
if (localStorage.getItem('chats') === null){	
    localStorage.setItem('chats', JSON.stringify([]));
}
function bg(){
if (localStorage['bg'] !== undefined){
	document.querySelector('#hist').style.backgroundImage = `url(${localStorage['bg']})`;
	document.querySelector('#hist').style.backgroundSize = 'cover';
}}


setInterval(refreshChat, 3000);

function plsEnter (event){
	//	console.log(event);

if (event.ctrlKey && event.keyCode === 13) {

sendMsg();refreshChat(); document.getElementById('messIn').value =''; messIn.focus();
}
}




function styles(){
	percent = window.outerHeight / 100;
    document.getElementById('topPanel').style.height = percent * 4 + 'px';
   // document.getElementById('hist').style.top = percent * 4 + 'px';
	document.getElementById('messIn').style.fontSize = font;
	document.getElementById('deleteChatHist').style.fontSize = font;
    //document.getElementById('chatWindow').style.height = window.outerHeight + 'px';
	
    document.getElementById('backBut').style.height = percent * 3 + 'px';
	document.getElementById('chatId').style.height = percent * 3 + 'px';
	document.getElementById('mId').style.height = percent * 3 + 'px';
	
	document.getElementById('backBut').style.fontSize = percent * 3 + 'px';
	document.getElementById('chatId').style.fontSize = percent * 3 + 'px';
	document.getElementById('mId').style.fontSize = percent * 3 + 'px';
}


function placeChats(){
if (localStorage.getItem('chats') !== null){
	a = localStorage.getItem('chats');
	a = JSON.parse(a);
	b = a.length;
	i = 0;
	c = '<br><br>';
	while (i < b){
		d = a[i];
		c = c + `<div style='position:relative; border:grey 1px solid; height:50px; left:5%; width: 90%;'>

<p style='position:absolute; height:50%; width:80%; color: white; cursor:pointer;' onclick="wAbonent('${d}');refreshAllChat(); scrollHist();">
&nbsp;&nbsp; ${d} &nbsp;&nbsp;
</p>
<span style='position:relative; left:90%; top:5.5px; width:20%; height:50%; font-size:200%; cursor:pointer;' onclick='removeChat("${d}")'>
×</span>
</div>`;
		//clearInterval(a);b = function(){console.log(9)};a = setInterval(b, 300); 
		i += 1;
	}
	document.getElementById('listOfDialogs').innerHTML = c
}
}




function placeMobileChats(){
if (localStorage.getItem('chats') !== null){
	a = localStorage.getItem('chats');
	a = JSON.parse(a);
	b = a.length;
	i = 0;
	c = '<br>';
	while (i < b){
		d = a[i];
		c = c + `<div style='position:relative; border:grey 1px solid; height:8vh; left:5%; width: 90%;'>

<p style='position:absolute; height:50%; width:80%; color: white; cursor:pointer;' onclick="styles();wAbonent('${d}');refreshAllChat(); showDialog(1); scrollHist();">
&nbsp;&nbsp; ${d} &nbsp;&nbsp;
</p>
<span style='position:relative; left:90%; top:5.5px; width:20%; height:50%; font-size:200%; cursor:pointer;' onclick='removeChat("${d}")'>
×</span>
</div>`;
		//clearInterval(a);b = function(){console.log(9)};a = setInterval(b, 300); 
		i += 1;
	}
	document.getElementById('listOfDialogs').innerHTML = c;
}
}


function showDialog(num){
    if (num === 1){
document.getElementById('chatWindow').style.display = 'unset';
    }
    else if (num === 0){
document.getElementById('chatWindow').style.display = 'none';
    }

}

function sendMsg(){
	if (document.getElementById('messIn').value.replaceAll(' ', '').replaceAll('\n', '') !== ''){

        if (localStorage['key-'+rAbonent()] === undefined){
            key = '';
        }
        else {
            key = localStorage['key-'+rAbonent()];
        }
		
		mess = document.getElementById('messIn').value;
		mess = mess.replaceAll('<', '&lt;').replaceAll('>', '&gt;');
	mess = encrypt(id + ': ' + mess, key);
	mess = JSON.stringify(mess);
	url =`php/sendMsg.php?id1=${id}&id2=${rAbonent()}&data=${mess}`;
	lumAjax({
		url:url,
		success:function(data){
			console.log(data);
			 scrollHist();
		}


	});

	
	}

}


function removeChatHist(){

url =`php/removeChat.php?id1=${id}&id2=${rAbonent()}`;
	lumAjax({
		url:url,
		success:function(data){
			console.log(data);
			 
		}


	});
}

function refreshChat(){
	if (rAbonent() !== 'none'){
	url =`php/readDi.php?id1=${id}&id2=${rAbonent()}`;
	lumAjax({
		url:url,
		success:function(data){
			 
			data = JSON.parse(data);
		//	data = data.reverse();
		//	console.log(data);

            if (localStorage['key-'+rAbonent()] === undefined){
            key = '';
        }
        else {
            key = localStorage['key-'+rAbonent()];
        }

			
		//	console.log(key);
		//	console.log(decrypt(JSON.parse(data[i]), key));
			s = 0;
            c = `<div class='messages' style='font-size:${font}; '>`;
			while (s < data.length){
				a = decrypt(JSON.parse(data[s]), key);
				mesarr = a.split(': ');
				if (mesarr[0] == id){
				c = c + `<div align='right' class='messageme'>

<span class='mescontentme'><span class='mesc'>${mesarr[1]}</span></span>
</div><br>`;}//<span class='authorme'>${mesarr[0]}</span>
				else {
				c = c + `<div class='message'>

<span class='mescontent'><span class='mesc'>${mesarr[1]}</span></span>
</div><br>`;} //<span class='author'>${mesarr[0]}</span>

		//		console.log(a);
				s += 1;
			}
			c += '</div>';


			pas = sessionStorage.getItem('pas');
			if (c !== pas){
				console.log('newMessge');
				sessionStorage.setItem('pas', c);
				document.getElementById('hist').innerHTML = c;
			    scrollHist();
			}}


	});
	}}

 
function refreshAllChat(){
	if (rAbonent() !== 'none'){
	url =`php/readDi.php?id1=${id}&id2=${rAbonent()}`;
	lumAjax({
		url:url,
		success:function(data){
			 
			data = JSON.parse(data);
		//	data = data.reverse();
		//	console.log(data);


            if (localStorage['key-'+rAbonent()] === undefined){
            key = '';
        }
        else {
            key = localStorage['key-'+rAbonent()];
        }
			
			console.log(key);
		//	console.log(decrypt(JSON.parse(data[i]), key));
			s = 0;
           c = `<div class='messages' style='font-size:${font}; '>`;
			while (s < data.length){
				a = decrypt(JSON.parse(data[s]), key);
				mesarr = a.split(': ');
				if (mesarr[0] == id){
				c = c + `<div align='right' class='messageme'>

<span class='mescontentme'><span class='mesc'>${mesarr[1]}</span></span>
</div><br>`;}//<span class='authorme'>${mesarr[0]}</span>
				
				else {
				c = c + `<div class='message'>

<span class='mescontent'><span class='mesc'>${mesarr[1]}</span><span>
</div><br>`;} //<span class='author'>${mesarr[0]}</span>
		//		console.log(a);
				s += 1;
			}
			c += '</div>';



			
			
				sessionStorage.setItem('pas', c);
				document.getElementById('hist').innerHTML = c;
			    scrollHist();
			}


	});
	}}


function wAbonent(id){
	document.getElementById('abonent').innerHTML = id;
	document.getElementById('chatId').innerHTML = id;
	document.getElementById('deleteChatHist').innerHTML = '☒';
}

function scrollHist(){
	document.querySelector('.messages').scrollTop = 9999999999999;

}

function rAbonent(id){
	return document.getElementById('abonent').innerHTML;
}

function showSettings(){
              document.getElementById('settings').style.display = 'unset';
    //document.getElementById('keyArea').value = localStorage.getItem('key');
	document.getElementById('chatsArea').value = localStorage.getItem('chats');
	try{
	document.getElementById('showSettingsBut').onclick = closeSettings;
	}catch(e){}
}
function saveChats(){
	localStorage.setItem('chats', document.getElementById('chatsArea').value);
	if (sessionStorage['format'] === 'h'){placeChats()}
			else {placeMobileChats()}
}
function closeSettings(){
	try{document.getElementById('showSettingsBut').onclick = showSettings}catch(e){}
	document.getElementById('settings').style.display = 'none';
	openRequests(false);
}
function saveKey(){

localStorage.setItem('key', document.getElementById('keyArea').value)

}
function addChat(){
	let adduserid = prompt('ID Пользователя');
	if (adduserid !== null & adduserid !== ''){
		lumAjax({
			url:`php/checkUser.php?id=${adduserid}`,
			success:function (data){
				if (data === 'true'){
	

        b = JSON.parse(localStorage.getItem('chats'));
		if (b.indexOf(adduserid) === -1){
		b.unshift(adduserid);
        b = JSON.stringify(b);
			localStorage.setItem('chats', b);
			sendfriend(id, adduserid)
            if (sessionStorage['format'] === 'h'){placeChats()}
			else {placeMobileChats()}

			
		
		}
		else{redAddUser()}}
		
				
			    if (data === 'false') {
					redAddUser();
				}}})}}
function removeChat(id){
	a = JSON.parse(localStorage.getItem('chats'));
    b = a.indexOf(id);
	a.splice(b, b);
	a = JSON.stringify(a);
	console.log(a);
	localStorage.setItem('chats', a);
	if (sessionStorage['format'] === 'h'){placeChats()}
			else {placeMobileChats()}
}


function redAddUser(){
	document.getElementById('addChat').style.color = 'red';
	document.getElementById('addChat').style.border = 'red 1px solid';
	setTimeout(noRedAddUser, 3000);
}
function noRedAddUser(){
document.getElementById('addChat').style.color = 'white';
	document.getElementById('addChat').style.border = 'grey 1px solid';
}
function getBase64(file) {
   var reader = new FileReader();
   reader.readAsDataURL(file);
   reader.onload = function () {
       //console.log(reader.result);
       localStorage['bg'] = reader.result;
       window.location.reload();
       
   };
   reader.onerror = function (error) {
     console.log('Error: ', error);
   };
}

let event = null;

document.addEventListener("touchstart", function (e) {
    event = e;
});
document.addEventListener("touchmove", function (e) {
    if (event) {
        if((e.touches[0].pageX - event.touches[0].pageX) > 200){
			closeSettings();
			document.getElementById('messIn').blur();
			showDialog(0);


															   };
    }
});
document.addEventListener("touched", function (e) {
    event = null;
});

function openRequests(mode){
	if(mode){
        lumAjax({
			url:`getfriend.php?id=${id}`,
    success: function(data){



a = data;
	a = JSON.parse(a);
	b = a.length;
	i = 0;
	c = '<br>';
	while (i < b){
		d = a[i];
		c = c + `<div style='color:white;' id='request-${d}'  class='reqDiv' style=''>

<p class='reqP' onclick="addfriendreq('${d}')">
&nbsp;&nbsp; ${d} &nbsp;&nbsp;
</p>
<span class='reqSpan' onclick='removefriendreq("${d}")'>
×</span>
</div>`;
		//clearInterval(a);b = function(){console.log(9)};a = setInterval(b, 300); 
		i += 1;
	}
	document.getElementById('friendRequests').innerHTML = c;



		
    }

	});
	



		
		document.getElementById('friendRequests').style.display = 'unset';

	}
	else{
		if (document.getElementById('friendRequests').style.display === 'unset'){
        document.getElementById('friendRequests').style.display = 'none';
		if (sessionStorage['format'] === 'h'){placeChats()}
			else {placeMobileChats()}
		}}


}
function removefriendreq(friend){
lumAjax({
    url:`getfriend.php?id=${id}&remove=${friend}`,
    success: function(data){
	
    }

});


	document.getElementById('request-' + friend).remove()
}



function addfriendreq(friend){
	let adduserid = friend;
	if (adduserid !== null & adduserid !== ''){
		lumAjax({
			url:`php/checkUser.php?id=${adduserid}`,
			success:function (data){
				if (data === 'true'){
	

        b = JSON.parse(localStorage.getItem('chats'));
		if (b.indexOf(adduserid) === -1){
		b.unshift(adduserid);
        b = JSON.stringify(b);
			localStorage.setItem('chats', b);
			document.getElementById('request-' + friend).style.color = 'green';
			if (sessionStorage['format'] === 'h'){placeChats()}
			else {placeMobileChats()}
			lumAjax({
    url:`getfriend.php?id=${id}&remove=${friend}`,
    success: function(data){
	
    }

});
			
		}
		else{}}
		
				
			    if (data === 'false') {
					
				}}})}}
