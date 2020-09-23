<?php
                
                    if ($_SESSION['count'] == 1) {
                        $_SESSION['print'] = $_SESSION['win_array'];
//                        $_SESSION['print'][]=$change;
                    }
                    $color="darkkhaki";
                    echo "<table border=1  ><tr ><td style='background-color:darkkhaki'>числата които са покрити с фолио и които определят печалбата</td>";
                    foreach ($_SESSION['print'] as $numm) {
                        echo "<td style='background-color:darkkhaki'><center>" . $numm . '</center></td>';
                    }
                    echo '</tr><table>';
                   
                    ?>