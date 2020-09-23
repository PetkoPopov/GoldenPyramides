<?php
session_start();
require_once './functionNumbers.php';
require_once './makeNewTicket.php';
?>
<form id="new_session" >
    <!--<input type="number" name="worth" style="width:100px;height: 44"/>-->
    <select name="worth" style="width: 99px;height: 77px;background-color: antiquewhite">
        <option value=""></option>
        <option value="no_win">without win</option>
        <option value="2">2</option>
        <option value="8">8</option>
        <option value="100">100</option>
        <option value="1000">1000</option>
        
        <option value="20000">20000</option>
        <option value="50000">50000</option>
        <option value="250000">250000</option>
        <option value="1000000">1000000</option>
        
        
        
    </select>
    <button type="submit" value="new_session" name="new"><h1>Generate new ticket</h1></button>
    <a href='../image/takePic.php'><h1>select pic for final :P</h1></a>
    <a href='../image/image.php'><h1>add new pic for more fun :)</h1></a>
</form>
<?php
if (!empty($_GET['new'])) {
    session_destroy();
    session_start();
    require_once './requirments.php';
    require_once './checkForWin.php';
    
    $_SESSION['image']= file_get_contents('../image/picForWin.php');
    
}
?>
<title>generate numbers</title>

<style>

    body{
        background-color: aquamarine
    }
</style>
<div>
    <form id="new_number" >
        <button type="submit" value="numm" name="dice" style="width: 222px;background-color: orangered;height: 66px">PLAY THE TICKET</button>
    </form>

    <?php
    if (isset($_SESSION['start'])) {
echo "<center>";
        if (!empty($_GET['dice'])) {
            $_SESSION['count']++;
            if (32 - $_SESSION['count'] >= 0) {
                $leftClicks = 32 - $_SESSION['count'];
                $key = rand(0, count($_SESSION['win_array']) - 1);
                $change = $_SESSION['win_array'][$key];
                $chng = $change . '*';

                require_once './showNumbersForCleaning.php';

                array_splice($_SESSION['win_array'], $key, 1);
                if (in_array($change, $_SESSION['numbers'])) {
                    array_splice($_SESSION['numbers'], array_search($change, $_SESSION['numbers']), 1, $chng);
                    echo"<center><table><tr><td bgcolor=green style='width:155px; height:66px'> your number is " . $change . ' </td></tr><table></center>';
                    echo '<center><h4> ' . $leftClicks . '                     clicks left </h4></center>';
                } else {
                    echo"<center><table><tr><td bgcolor=orange style='width:155px; height:66px'>your number is not  in matrix " . $change . '</td></tr><table> </center>';
                    echo '<center><h4>' . $leftClicks . '                 clicks left</h4></center>';
                }
                
                tableShow($_SESSION['numbers']);
                           } else {
//                echo"<h1><marquee><mark>you have not move any more pls press NEW GAME</mark></marquee></h1>";
//            require '../image/';
                
                     $picPath='../image/'.$_SESSION['image'];                  
                                ?>
    
    <img src="<?=$picPath?>" height="200" width="400" alt="don't worry"/>
              
              <?php
              
            }
            echo "</center>";
        }
    } else {
        $_SESSION['start'] = "session is started";
        $_SESSION['numbers'] = createNubers();
        $_SESSION['id'] = uniqid();
        $_SESSION['count'] = 0;
        ///////////////////////////
        $_SESSION['win_array'] = makeWinTicket($_SESSION['numbers'], $_GET['worth']);
echo"<center>";
echo "<br/><table border=1><tr> <td style='height:44px;'>YOU SUCCESSFUY CREATE NEW TICKET</td></tr></table><br/>";
        tableShow($_SESSION['numbers']);
        ?>
                <div style="background-color: darkkhaki"><?php
                    
                        $_SESSION['print'] = $_SESSION['win_array'];
                    
                    
                    $color="darkkhaki";
                    //echo "YOU SUCCESSFUY CREATE NEW TICKET<br/>";
                    echo "<table border=1  ><tr><td>числата които са покрити с фолио и които определят печалбата</td>";
                    foreach ($_SESSION['print'] as $numm) {
                        echo '<td>' . $numm . '</td>';
                    }
                    echo '</tr><table>';
                   
                    ?>
                </div>
                <?php
        echo"</center>";
    }
    ?>
</div>


