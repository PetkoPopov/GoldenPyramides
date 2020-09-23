<?php

if(!isset($_GET['worth'])){
    echo "<h2>SELECT NUMBER</h2>";exit;
}

 if(empty($_GET['worth'])){
    $worth=$_GET['worth'];
    echo "<h2 style='width:99px;height:66'>SELECT WIN</h2>";
    exit;
}else if($_GET['worth']=='no_win'){
    $_GET['worth']=0;
}
//var_dump($_GET);die;
if($_GET["worth"]==0||$_GET["worth"]==2||$_GET["worth"]==8||$_GET["worth"]==20||
        $_GET["worth"]==100||$_GET["worth"]==1000||$_GET["worth"]==20000||
        $_GET["worth"]==50000||$_GET["worth"]==250000||$_GET["worth"]==1000000){}else{
    echo "The Number must be <h1>0 or</h1>  <h1>2 or</h1> "
    . "<h1>8 or</h1> <h1>20 or</h1>  <h1>100 or</h1><h1>1000 or </h1> "
            . "<h1>20000 or</h1><h1>50000 or</h1> <h1>250000 or </h1><h1>1000000</h1> ";
    exit;

    
        }