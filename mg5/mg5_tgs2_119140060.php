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
    <h1>text sebelum</h1>
    <p><?php 
    $kata = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
    for($i = 0; $i < count($kata);$i++){
        echo $kata[$i] . " ";
    }
    ?></p>
    <h1>sesudah</h1>
    <p>
    <?php

    function tukar(&$a,&$b){
        $temp = $a;
        $a = $b;
        $b = $temp;

    }

    $isi = array();
    for ($i = 0; $i < count($kata);$i++){
        $min = $kata[$i][0];
        $pos = $i;
        for($j = $i+1; $j < count($kata);$j++){
            if($kata[$j][0] < $min){
                $min = $kata[$j][0];
                $pos = $j;
            }else if ($kata[$j][0] == $min){
                if($kata[$j][1] < $kata[$pos][1]){
                    $min = $kata[$j][0];
                    $pos = $j;
                }
            }
        }
        tukar($kata[$i],$kata[$pos]);
    }
    for($i = 0; $i < count($kata);$i++){
        echo $kata[$i] . " ";
    }
?>

    </p>
</center>
</body>
</html>