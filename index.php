<?php
session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//        require_once './Numbers/numbers.php';
      
        if(!isset($_SESSION['count'])){
            $_SESSION["count"]=0;
        }else{
            
        $_SESSION['count']++;
        }
        echo $_SESSION['count'];
//        session_destroy();
        ?>
    </body>
</html>
