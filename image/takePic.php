<?php

$arrGetPic= file_get_contents('./countImage.php');
$allPics=explode('_',$arrGetPic);
?>
<form >
    
    
    ИЗБЕРИ СНИМКА :)

<?php
foreach($allPics as $k=>$pic){
    
  
?>


    <button name='image' value='<?=$pic?>'> <img src="<?=$pic?>"  width="100" height="51"/></button>
<?php

//    echo '<br/>';
    
}
?>
</form>
<?php
if(isset($_GET['image'])){
    
    file_get_contents( './picForWin.php');
    file_put_contents( './picForWin.php', $_GET['image']);
    header("Location: ../Numbers/numbers.php ");
}

