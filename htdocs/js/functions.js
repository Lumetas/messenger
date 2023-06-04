if (localStorage.getItem('chats') === null){	
    localStorage.setItem('chats', JSON.stringify([]));
}

if (localStorage.getItem('key') === null){
	let key = prompt('укажите ваш ключ, его всегда можно будет изменить в настройках'); 
    localStorage.setItem('key', key);
}
else {
	let key = localStorage.getItem('key');
}

setInterval(refreshChat, 3000);

function plsEnter (event){
//	console.log(event);
if (event.keyCode === 13) {

sendMsg();refreshChat(); document.getElementById('messIn').value =''; messIn.focus();
	}

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
	c = '';
	while (i < b){
		d = a[i];
		c = c + `<div style='position:relative; border:grey 1px solid; height:8vh; left:5%; width: 90%;'>

<p style='position:absolute; height:50%; width:80%; color: white; cursor:pointer;' onclick="wAbonent('${d}');refreshAllChat(); scrollHist();showDialog(1);">
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
	if (document.getElementById('messIn').value !== ''){
	key = localStorage.getItem('key');
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




function refreshChat(){
	if (rAbonent() !== 'none'){
	url =`php/readDi.php?id1=${id}&id2=${rAbonent()}`;
	lumAjax({
		url:url,
		success:function(data){
			 
			data = JSON.parse(data);
		//	data = data.reverse();
		//	console.log(data);
			key = localStorage.getItem('key');
		//	console.log(decrypt(JSON.parse(data[i]), key));
			s = 0;
            c = `<div align='left' style='
position:relative; bottom:0px; left: 40px; font-size:100%; width:80%;

'>`;
			while (s < data.length){
				a = decrypt(JSON.parse(data[s]), key);
				c = c + `<span style='white-space:pre-line'>${a}</span><br><br>`;
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
			key = localStorage.getItem('key');
		//	console.log(decrypt(JSON.parse(data[i]), key));
			s = 0;
            c = `<div align='left' style='
position:relative; bottom:0px; left: 40px; font-size:100%; width:80%;

'>`;
			while (s < data.length){
				a = decrypt(JSON.parse(data[s]), key);
				c = c + `<span style='white-space:pre-line'>${a}</span><br><br>`;
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
}

function scrollHist(){
	document.getElementById('hist').scrollTop = 9999999999999;

}
function rAbonent(id){
	return document.getElementById('abonent').innerHTML;
}

function showSettings(){
              document.getElementById('settings').style.display = 'unset';
    document.getElementById('keyArea').value = localStorage.getItem('key');
	document.getElementById('chatsArea').value = localStorage.getItem('chats');

}
function saveChats(){
	localStorage.setItem('chats', document.getElementById('chatsArea').value);
	document.location.reload();
}
function closeSettings(){

 document.getElementById('settings').style.display = 'none';
}
function saveKey(){

localStorage.setItem('key', document.getElementById('keyArea').value)

}
function addChat(){
	a = prompt('ID Пользователя');
	if (a !== null & a !== ''){
		lumAjax({
			url:`php/checkUser.php?id=${a}`,
			success:function (data){
				if (data === 'true'){
	

        b = JSON.parse(localStorage.getItem('chats'));
		if (b.indexOf(a) === -1){
		b.unshift(a);
        b = JSON.stringify(b);
			localStorage.setItem('chats', b);
			window.location.reload();
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
	window.location.reload();
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
