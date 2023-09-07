<style>
<?php include('all.php'); ?>
    .messages{

max-height:100%;
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
        font-size:170%;
        resize:none;
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
        top:0px;
        left:38vw;
        position:absolute;
        height:100vh;
        width:20vw;
        background:#121212;
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
        left:0px;
        top:10px;
        outline: 0px solid #1C6EA4;
        outline-offset: 0px;
    width:calc(100% - 8px);
        height:250px;
        border: 1px solid grey;
        padding:2px;
        resize:none;
    font-size:200%;
    margin:2px;


    }
.saveKeyBut{
        background:rgb(37,37,37);
        color:white;
        position:relative;
        left:25%;
        width:50%;
        border: 1px solid white;
        padding: 2px;
        
     


    }

.reqDiv{

    position:relative;
    border:grey 1px solid;
    height:8vh;
    left:5%;
    width: 90%;

}

.reqP{

    top: -35%;
    position:absolute;
    height:50%;
    width:80%;
    color: inherit;
    cursor:pointer;
    font-size:250%;

}
.reqSpan{
    color:white;
    position:relative;
    display:block;
    left:85%;
    top:5%;
    width:20%;
    height:50%;
    font-size:350%;
    cursor:pointer;

}



    </style>
