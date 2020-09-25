<?php
                
                    if ($_SESSION['count'] == 1) {
                        $_SESSION['print'] = $_SESSION['win_array'];
//                        $_SESSION['print'][]=$change;
                    }
                    $color="darkkhaki";
                    echo "<form method=post>";
                    ?><table border=1  ><tr ><td style="background-color: darkkhaki">
                                
                    числата които са покрити с фолио и които определят печалбата
                            </td>
                            <?php
                    foreach ($_SESSION['print'] as $numm) {
                        if(isset($numm[2])&&$numm[2]=="*"){
                            ?><td style="background-color: darkkhaki"><center><button type="submit" value="<?=$numm?>" name="clean"><?=$numm ?></button></center></td>
                    <?php
                        }else{
                            ?><td style="background-color: darkkhaki"><center><button type="submit" value="<?=$numm?>" name="clean">****</button></center></td>
                    <?php
                        }
                        
                    }
                    echo '</tr><table></form>';
                   
                    ?>