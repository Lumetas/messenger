<style>
<?php include('all.php'); ?>
    .menu{
        position:absolute;
        left:0;
        top:0;
        width:3vw;
        height:100vh;
        background:#0d0d0d;
        color:white;

    }

.listOfDialogs{
        position:absolute;
        left:3vw;
        height:100vh;
        width:35vw;
        top:0;
        background:#212121;
        color:white;
    }
.chatWindow{
        position:absolute;
        left:38vw;
        height:100vh;
        top:0;
        width:calc(100vw - 38vw);
        background:black;
        color:white;


    }
.chatId{
        top:0;
        background:#212121;
        color:white;
        position:absolute;
        left:0;
        width:calc(100vw - 38vw);
        z-index:1;
        height:4vh;
        


    }
.messIn{
        bottom:0;
        background:#212121;
        color:white;
        position:absolute;
        left:0;
        width:57vw;
        z-index:1;
        height:calc(4vh - 4px);
        outline: 0px solid #1C6EA4;
        outline-offset: 0px;
        border:1px solid grey;

    }
.sendBut{
        bottom:0;
        background:#212121;
        color:white;
        position:absolute;
        right:0;
        width:4.7vw;
        z-index:1;
        height:4vh;
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
        height: 92%;


    }
.menBut{
        background:#00000000;
        color:white;
        font-size:200%;
        user-select:none;
        cursor: pointer;
        width:70%;
        border:grey 0.5px solid;

    }
.settings{
        top:0;
        right:0;
        position:absolute;
        height:100vh;
        width:100vw;
        background:black;
        color:white;
        z-index:2;
        display:none;


    }
.closeSettings{
        background:#00000000;
        position:absolute;
        right: 10px;
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
        left:40px;
        top:10px;
        outline: 0px solid #1C6EA4;
        outline-offset: 0px;
        width:500px;
        height:200px;
        resize:none;


    }
.saveKeyBut{
        background:rgb(37,37,37);
        color:white;
        position:relative;
        left:40px;


    }


    </style>
