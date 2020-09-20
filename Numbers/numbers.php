<?php session_start();
 require_once './functionNumbers.php';
?>
<form id="new_session" >
    <button type="submit" value="new_session" name="new"><h1>NEW GAME</h1></button>
</form>
<?php
if(!empty($_GET['new'])){
    session_destroy();
    session_start();
}?>
<title>generate numbers</title>

<style>
    h2{
        background-color: brown
    }
    h3{
        background-color: darkolivegreen
    }
    body{
        background-color: aquamarine
    }
</style>
<div>
<form id="new_number" >
<button type="submit" value="numm" name="dice" style="width: 222px;background-color: orangered;height: 66px">TAKE ME NUMBER</button>
</form>

<?php
if(isset($_SESSION['start'])){
    //tableShow($_SESSION['numbers']);
    ?>

<?php
if(!empty($_GET['dice'])){
    $_SESSION['count']++;
    if(32-$_SESSION['count']>=0){
        $leftClicks=32-$_SESSION['count'];
      $key=rand(0,count($_SESSION['win_array'])-1);
        $change=$_SESSION['win_array'][$key];
        $chng=$change.'*';
        array_splice($_SESSION['win_array'],$key,1);
       if(in_array($change, $_SESSION['numbers'])){
           array_splice($_SESSION['numbers'], array_search($change, $_SESSION['numbers']),1,$chng);
            echo'<h3>your number is <center>'.$change.'</center> </h3>';
            echo '<center><h4> '.$leftClicks.'                     clicks left </h4></center>';
       }else{
            echo'<h2>your number is not  in matrix <center>'.$change.'</center> </h2>';
            echo '<center><h4>'.$leftClicks.'                 clicks left</h4></center>';
       }
       
      
       tableShow($_SESSION['numbers']);
        
      
    }else{
        echo"<h1><mark>you have not move any more pls press NEW GAME</mark></h>";
    }
    
}

}else{
    $_SESSION['start']="session is started";
    $_SESSION['numbers']= createNubers();
    $_SESSION['id']= uniqid();
    $_SESSION['count']=0;
    ///////////////////////////
    $_SESSION['win_array']= makeWinTicket($_SESSION['numbers'],8);
   
    tableShow($_SESSION['numbers']);
    
}
     
    ?>
</div>


