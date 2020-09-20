<?php session_start();
 require_once './functionNumbers.php';
?>
<form id="new_session" >
    <input type="number" name="worth" style="width:100px;height: 44"/>
    <button type="submit" value="new_session" name="new"><h1>Generate new ticket</h1></button>
</form>
<?php
if(!empty($_GET['new'])){
    session_destroy();
    session_start();
    require_once './requirments.php';
}?>
<title>generate numbers</title>

<style>
    p{
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
            echo'<p >your number is not  in matrix <center>'.$change.'</center> </p>';
            echo '<center><h4>'.$leftClicks.'                 clicks left</h4></center>';
       }
       
       ?><div style="background-color: darkkhaki"><?php
      if($_SESSION['count']==1){
          $_SESSION['print']=$_SESSION['win_array'];
      }
      echo "<table border=1><tr><td><h4>числата които са покрити с фолио и които определят печалбата<h4></td>";
       foreach($_SESSION['print'] as $numm){
       echo '<td>'.$numm.'</td>';
       }
           echo '</tr><table>';
       tableShow($_SESSION['numbers']);
       ?></div><?php
      
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
    $_SESSION['win_array']= makeWinTicket($_SESSION['numbers'],$_GET['worth']);
   
    tableShow($_SESSION['numbers']);
    
}
     
    ?>
</div>


