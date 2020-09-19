<?php

function createNubers($size = 20) {
    $arr = [];
    for ($i = 1; $i < 100; $i++) {
        $arr[] = $i;
    }

    for ($u = 0; $u < $size; $u++) {
        $keyNumber = rand(1, (98 - $u));
        $numbers[] = $arr[$keyNumber];
        array_splice($arr, $keyNumber, 1);
    }
    return $numbers;
}

function tableShow($numbersArr) {
    $td = '';
    $counter = 0;
    echo "<table border=1><tr><td><h1>" . $_SESSION['id'] . "</h1></td></tr></table>";
    echo '<form><table>'
    . '<th>2лв</th><th>8лв</th><th>20лв</th><th>100лв</th>'
    . '<tr>';
    $tdValue = [];
    foreach ($numbersArr as $k => $numbers) {
        $counter++;
        $checkForStar = str_split($numbers);
        if (in_array("*", $checkForStar)) {
            $td .= "<td bgcolor=red><input type=submit value=$numbers style=width:99px;height:44px;background-color:green;></td>";
        } else {
            $tdValue[] = $numbers;
            $td .= "<td><input type=submit value=$numbers style=width:99px;height:44px;background-color:lightgreen;></td>";
        }
        if (($counter - 1) % 4 == 0) {
            $value['2'][] = $numbers;
        }
        if (($counter - 2) % 4 == 0) {
            $value['8'][] = $numbers;
        }
        if (($counter - 3) % 4 == 0) {
            $value['20'][] = $numbers;
        }
        if (($counter - 4) % 4 == 0) {
            $value['100'][] = $numbers;
        }
        if ($counter % 4 == 0) {
            if ($counter == 4) {
                $value['1000'] = $tdValue;
                $tdValue = [];
                $td .= "<td>1000лв</td>";
            }
            if ($counter == 8) {
                $value['20000'] = $tdValue;
                $tdValue = [];
                $td .= "<td>20000лв</td>";
            }
            if ($counter == 12) {
                $value['50000'] = $tdValue;
                $tdValue = [];
                $td .= "<td>50000лв</td>";
            }
            if ($counter == 16) {
                $value['250000'] = $tdValue;
                $tdValue = [];
                $td .= "<td>250000лв</td>";
            }
            if ($counter == 20) {
                $value['1000000'] = $tdValue;
                $tdValue = [];
                $td .= "<td>1000000лв</td>";
            }
            ;
            echo $td . '</tr>';
            $td = '';
        }
    }
    echo '<table></form>';
    return $value;
}

function makeWinTicket(array $arrNumbers,array $value=[], int $win = 0) {
  
    $counter = 0;
    for ($i = 1; $i <= 99; $i++) {
        $arrFree[] = $i;
    }

    if ($win == 0) {
        foreach ($arrNumbers as $integer) {
            array_splice($arrFree, array_search($integer, $arrFree), 1);
        }
        for ($i = 0; $i < 20; $i += 5) {
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, $i, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
        }
        $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, rand(16,19), 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            for($u=0;$u<12;$u++){
                $arrNumbers[]=$arrFree[rand(0, count($arrFree)-1)];
            }
            
            return $arrNumbers;
        
    } else if ($win == 2) {
        
        
    } else if ($win == 8) {
        
    } else if ($win == 20) {
        
    } else if ($win == 100) {
        
    } else if ($win == 1000) {
        
    } else if ($win == 20000) {
        
    } else if ($win == 50000) {
        
    } else if ($win == 250000) {
        
    } else if ($win == 1000000) {
        
    }

    return $winArr;
}
//
//$create = createNubers();
//$show = tableShow($create);
//tableShow(makeWinTicket($create));









