body{
background: black;
    overflow-x:hidden;
}



.message{
    


    position:relative;
    width:90%;
    left:5%;
}

.messageme{
    


    position:relative;
    width:90%;
    right:-5%;
}

.author{

    display: flex;
    justify-content: flex-start;

}

.authorme{
    display: flex;
    justify-content: flex-end;

}

.mescontent{
    word-break: break-word;
    white-space: pre-wrap;

    width:75%;

    display: flex;
    justify-content: flex-start;
}

.mescontentme{
    word-break: break-word;
    white-space: pre-wrap;
    
    width:75%;
    
    display: flex;
    justify-content: flex-end;
}

.messages{
    
    position:absolute;
    bottom:0px;
    left: 0%;
    width:100%;
    height:max-content;
    
    overflow-y:auto;
    
}

::-webkit-scrollbar {
    width: 5px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgb(255 255 255 / 50%)
}
.mesc{

    background:#181818;
    width:max-content;
    border: 1px solid grey;
    border-radius: 3px;
    padding: 1%;
  }
