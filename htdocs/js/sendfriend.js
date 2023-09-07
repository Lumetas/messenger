function sendfriend(mainId, id){
lumAjax({
    url:`addfriend.php?id=${mainId}&friend=${id}`,
    success: function(data){
	
    }

});
}
