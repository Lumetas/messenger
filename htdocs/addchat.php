<?php
$id = $_GET['id'];
$mainId = $_COOKIE['id'];
echo <<<OUT
    <script src='js/ajax.js'></script>
    <script src='js/sendfriend.js'></script>
    <script>let id = '$id'; let mainId = '$mainId';</script>
      


    


OUT;
?>
        <script>



function addChat(id){
	a = id;
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
			sendfriend(mainId, id);
			
		}
		else{ window.location.href = '/';}
		
				
			    if (data === 'false') {
					window.location.href = '/';
				}}}})}}

addChat(id);



window.location.href = '/';

    </script>
