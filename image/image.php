<?php session_start();?>
<body bgcolor="olive">
    <form enctype="multipart/form-data" method="post">
        <div><input type="file" name="img" style="width: 255px;height: 44px"/>

        </div>
        <input type="submit" style="width: 155px;height: 44px"/>
        <a href='../Numbers/numbers.php'><h1>go to the ticket game </h1></a>

    </form>

    <?php
    define("DATA_DIR", __DIR__ . '../image/');


    if (!empty($_FILES['img']['name'])) {

        $name = $_FILES['img']["name"];
//ще зпишем името на снимката с числа 1,2 ,3 и т.н. не с юник-име,
// така конторираме по лесно коя снимка да покажем
        //не използваме база данни заради нищожната информация във файла
        $qwerty=file_get_contents( '../image/countImage.php');
        if(empty($qwerty)){
            
            $newImageNumber=1;
        }else{
        $arr= explode("_",$qwerty);
        rsort($arr);
        
        $newImageNumber=intval($arr[0])+1;
        }
        
        $newName = $newImageNumber. '-' . $name;
        sort($arr);
        
        $arr[]=(string)$newName;
        $putAgain= implode("_", $arr);
        file_put_contents('../image/countImage.php', $putAgain);

        

        move_uploaded_file($_FILES['img']['tmp_name'], $newName);

    }else{
        echo "<h1>select image</h1>";
        }
        $_SESSION['arrPics']=rsort($arr);
    foreach($arr as $a){
            
              ?>
    <img src="<?=$a?>" height="150" width="200"/>
              
              <?php
            }
    
    ?>
</body>