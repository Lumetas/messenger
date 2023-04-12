const width = window.innerWidth
const height = window.innerHeight
if (width > height){
	lumAjax({
		url:"pc.php",
		success:function(data){
			document.getElementById('documentBody').innerHTML = data;
            placeChats();document.documentElement.requestFullscreen();

		}
	});
}
if (height >= width){


	lumAjax({
		url:"mobile.php",
		success:function(data){
			document.getElementById('documentBody').innerHTML = data;
            placeMobileChats();
			document.getElementById('messIn').style.height = (height / 100 * 6) - 4 + 'px';
			document.getElementById('sendBut').style.height = height / 100 * 6 + 'px';
		}
	});
	
}
