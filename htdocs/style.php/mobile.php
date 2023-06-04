<style>
<?php //include('all.php'); ?>
    body{
     background:rgb(37,37,37);
     overflow:hidden;
     font-size:3vh;



 }
    .menu{
        position:absolute;
        left:0;
        top:0;
        width:100vw;
        height:8vh;
        background:#0d0d0d;
        color:white;

    }

.listOfDialogs{
        position:absolute;
        left:0vw;
        height:90vh;
        width:100vw;
        top:10vh;
     background:rgb(37,37,37);
        color:white;
     overflow-y:auto;
    }
.chatWindow{
        position:absolute;
        left:0vw;
     height:calc(100vh);
        top:0;
        width:100vw;
        background:black;
        color:white;
     z-index:3;
     display:none;


    }
.chatId{
        top:0;
        background:#212121;
        color:white;
        position:absolute;
        left:0;
        width:calc(100vw);
        z-index:1;
     /* height:4vh;*/
        


    }
.messIn{
        bottom:0vh;
        background:#212121;
        color:white;
        position:absolute;
        left:0;
        width:88.5vw;
        z-index:1;
        height:calc(6vh - 4px);
        outline: 0px solid #1C6EA4;
        outline-offset: 0px;
        border:1px solid grey;

    }
.sendBut{
        bottom:0vh;
        background:#212121;
        color:white;
        position:absolute;
        right:0;
        width:11vw;
        z-index:1;
        height:6vh;
        outline: 0px solid #1C6EA4;
        outline-offset: 0px;
        border:1px solid grey;
        font-size:150%;
        cursor: pointer;


    }
.hist{
        position:absolute;
        top:4vh;
        width:100%;
        color:white;
        background:black;
        left:0;
        height: 85%;


    }
.menBut{
        background:#00000000;
        color:white;
        font-size:200%;
        user-select:none;
        cursor: pointer;
        width:100%;
        border:grey 0.5px solid;
     top: 7%;
     position: relative;


    }
.settings{
        top:0;
        right:0;
        position:absolute;
        height:100vh;
        width:100vw;
        background:rgb(22,22,22);
        color:white;
        z-index:2;
        display:none;


    }
.closeSettings{
        background:#00000000;
        position:absolute;
        right: 10vw;
        top:5px;
        color:white;
        font-size:200%;
        user-select:none;
        cursor: pointer;
        width:20px;

    }
.keyArea{
        background:rgb(37,37,37);
        color:white;
        position:relative;
        left:10vw;
        top:10px;
        outline: 0px solid #1C6EA4;
        outline-offset: 0px;
     width:80vw;
        height:70vh;
        resize:none;
     font-size:150%;


    }
.saveKeyBut{
        background:rgb(37,37,37);
        color:white;
     position:relative;
        left:10vw;
         
    font-size: 150%;
     width:80vw;

    }

.saveChatsBut{
        background:rgb(37,37,37);
        color:white;
     position:relative;
        left:10vw;
         
    font-size: 150%;
     width:80vw;

    }


    </style>
