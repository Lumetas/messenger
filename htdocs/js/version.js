function getFormat(init){
let width = window.innerWidth
let height = window.innerHeight
	if (width > height){
		if (sessionStorage['format'] !== 'h' | sessionStorage['format'] === undefined | init === 1){
	lumAjax({
		url:"pc.php",
		success:function(data){
			document.getElementById('documentBody').innerHTML = data;
            placeChats(); 
			document.getElementById('messIn').style.height = (height / 100 * 6) - 25 + 'px';
			sessionStorage['format'] = 'h';
			bg()

		}
	});
}
}
if (height >= width){
    if (sessionStorage['format'] !== 'v' | sessionStorage['format'] === undefined | init === 1){

	lumAjax({
		url:"mobile.php",
		success:function(data){
			//setInterval("document.documentElement.scrollTop = 0; ", 1)
			
			document.getElementById('documentBody').innerHTML = data;
            placeMobileChats();
			document.getElementById('messIn').style.height = (height / 100 * 6) - 5 + 'px';
			document.getElementById('sendBut').style.height = height / 100 * 6 + 'px';
            sessionStorage['format'] = 'v';
            bg();

		}
	});
	
	}}
}

window.onresize = function(event) {
    getFormat();
};
