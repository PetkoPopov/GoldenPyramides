<?php
function makeWinTicket(array $arrNumbers,int $win=0 ) {
  
    $counter = 0;
        for ($i = 1; $i <= 99; $i++) {
        $arrFree[] = $i;
    }
    foreach ($arrNumbers as $integer) {
            array_splice($arrFree, array_search($integer, $arrFree), 1);
        }
//arrFree са числата които не участват в играта
    if ($win == 0) {
        
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
        
        for ($i = 1; $i < 12; $i += 5) {
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, $i, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
        }
        $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, rand(13,15), 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, rand(17,19), 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            for($u=0;$u<12;$u++){
                $arrNumbers[]=$arrFree[rand(0, count($arrFree)-1)];
            }
            
            return $arrNumbers;
        
        
    } else if ($win == 8) {
        
        
        $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, 0, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,6, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,11, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,18, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,rand(14,15), 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            for($u=0;$u<12;$u++){
                $arrNumbers[]=$arrFree[rand(0, count($arrFree)-1)];
            }
            
            return $arrNumbers;
        
    } else if ($win == 20) {
        
       
        
        $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, 0, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,1, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,7, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,9, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,rand(12,13), 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            
            for($u=0;$u<12;$u++){
                $arrNumbers[]=$arrFree[rand(0, count($arrFree)-1)];
            }
            
            return $arrNumbers;
        
    } else if ($win == 100) {
           $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, 0, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,rand(5,6), 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,rand(9,10), 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,13, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,18, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            //допълваме до 32 с произволни числа///////////////////////////
            for($u=0;$u<12;$u++){                                      ////
                $arrNumbers[]=$arrFree[rand(0, count($arrFree)-1)];    ////
            }                                                          ////
            ///////////////////////////////////////////////////////////////
            return $arrNumbers;


        
    } else if ($win == 1000) {$new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, 4, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,9, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,14, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,19, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            //допълваме до 32 с произволни числа///////////////////////////
            for($u=0;$u<12;$u++){                                      ////
                $arrNumbers[]=$arrFree[rand(0, count($arrFree)-1)];    ////
            }                                                          ////
            ///////////////////////////////////////////////////////////////
            return $arrNumbers;

        
    } else if ($win == 20000) {
$new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, 0, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,10, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,15, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,17, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            
            //допълваме до 32 с произволни числа///////////////////////////
            for($u=0;$u<12;$u++){                                      ////
                $arrNumbers[]=$arrFree[rand(0, count($arrFree)-1)];    ////
            }                                                          ////
            ///////////////////////////////////////////////////////////////
            return $arrNumbers;
        
    } else if ($win == 50000) {
        $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, 0, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,5, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,15, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,17, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            //допълваме до 32 с произволни числа///////////////////////////
            for($u=0;$u<12;$u++){                                      ////
                $arrNumbers[]=$arrFree[rand(0, count($arrFree)-1)];    ////
            }                                                          ////
            ///////////////////////////////////////////////////////////////
            return $arrNumbers;

        
    } else if ($win == 250000) {
        $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, 0, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,5, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,10, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,19, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            //допълваме до 32 с произволни числа///////////////////////////
            for($u=0;$u<12;$u++){                                      ////
                $arrNumbers[]=$arrFree[rand(0, count($arrFree)-1)];    ////
            }                                                          ////
            ///////////////////////////////////////////////////////////////
            return $arrNumbers;

    } else if ($win == 1000000) {
        $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers, 0, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,5, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,10, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            $new = $arrFree[rand(0, count($arrFree) - 1)];
            array_splice($arrNumbers,15, 1, $new);
            array_splice($arrFree, array_search($new, $arrFree), 1);
            
            //допълваме до 32 с произволни числа///////////////////////////
            for($u=0;$u<12;$u++){                                      ////
                $arrNumbers[]=$arrFree[rand(0, count($arrFree)-1)];    ////
            }                                                          ////
            ///////////////////////////////////////////////////////////////
            return $arrNumbers;

    }

//    return $winArr;
}

