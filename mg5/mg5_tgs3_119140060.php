<?php
    function isprima($a){
        $prima = $a - 1;
        if($a == 1){
            return false;
        }
        else {
            while($a % $prima > 0 ){
                $prima--;
            }
            if ($prima == 1){
                return true;
            }
            else{
                return false;
            }
        }
    }
  
    $num = $_POST["num"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Bilangan Prima </h1> <br>
        <form action="" method="POST">
            <input type="text" id="num" name="num" placeholder="pick a number">
            <button>Eksekusi</button>
        </form>
        <p><?php 
            for ($i =1 ;$i < $num;$i++){
                if(isprima($i)){
                    echo $i . " ";
                }
            }
        ?></p>
    </center>
</body>
</html>