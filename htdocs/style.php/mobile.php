<style>
<?php include('all.php'); ?>
    .messages{

max-height:95%;
    }

.hr {
    margin: 0px 0;
    height: 4px;
    background: black;
    position: relative;
    overflow: hidden;
    border: none;
}        
.hr:after {
    content: "";
    height: 4px;
     background: grey;
    position: absolute;
    width: 20%;
    top: 0;
    animation: anim-hr 5s linear infinite;  
}
@keyframes anim-hr {
    0% {
        left: -200%;
    } 
    100% {
        left: 1000%;
    }
}
    .setblock{
    position: relative;
    margin-top: 1%;
    margin-bottom: 1%;
    height: 50px;
    left: 2.5%;
    display: flex;
    width: 95%;
    flex-wrap: wrap;
    font-size: 200%;
    justify-content: center;
    align-content: center;
    user-select: none;
    

    }
    .qr{
        position:relative;
        width:100%;

    }
    body{
     background:rgb(37,37,37);
     
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
        height:92vh;
        width:100vw;
        top:8vh;
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
        top:0px;
        background:#212121;
        color:white;
        position:fixed;
        left:0px;
        width:calc(100vw);
        z-index:1;
     /* height:4vh;*/
        


    }
.messIn{
        bottom:0vh;
        background:#212121;
        color:white;
        position:fixed;
        left:0;
        width:88.5vw;
        resize: none;
        z-index:1;
        height:calc(6vh - 6px);
        outline: 0px solid #1C6EA4;
        outline-offset: 0px;
        border:1px solid grey;

    }
.sendBut{
        bottom:0vh;
        background:#212121;
        color:white;
        position:fixed;
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
        bottom:6vh;
        width:100%;
        color:white;
        background:black;
        left:0px;
        height: 94%;


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
        left:4px;
        top:10px;
        outline: 0px solid #1C6EA4;
        outline-offset: 0px;
        width:calc(100% - 8px);
        height:40vh;
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

.reqDiv{

    position:relative;
    border:grey 1px solid;
    height:8vh;
    left:5%;
    width: 90%;

}

.reqP{

    top: -70%;
    position:absolute;
    height:50%;
    width:80%;
    color: inherit;
    cursor:pointer;
    font-size:200%;
    user-select:none;
}
.reqSpan{
    color:white;
    position:relative;
    display:block;
    left:85%;
    top:-25%;
    width:20%;
    height:50%;
    font-size:350%;
    cursor:pointer;

    </style>
