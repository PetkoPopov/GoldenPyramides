<?php
for($i=0;$i<21;$i++){
    $arr[]=$i;
}
array_splice( $arr,2,1);
array_splice( $arr,6,1);
echo '<pre>';
var_dump($arr);
echo '</pre>';
die;