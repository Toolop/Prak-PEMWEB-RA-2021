<?php
            function tambah($a,$b){
                return $a + $b;
            }
            function kurang($a,$b){
                return $a - $b;
            }
            function kali($a,$b){
                return $a * $b;
            }
            function bagi($a,$b){
                return $a / $b;
            }
            function mod($a,$b){
                return $a % $b;
            }

            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $operator = $_POST['operator'];
            $output = "Hasil";
            
            if ($operator == "+"){
                $output = tambah($a,$b);
            }
            else if ($operator == "-"){
                $output = kurang($a,$b);
            }
            else if ($operator == "*"){
                $output = kali($a,$b);
            }
            else if ($operator == "/"){
                $output = bagi($a,$b);
            }
            else if ($operator == "%"){
                $output = mod($a,$b);
            }
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
    <form name="calc" action="" method="post">
    <center>
        <input type="text" name="num1" id="num1"><br><br>
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
            <option value="%">%</option>
        </select>
        <br><br>
        <input type="text" name="num2" id="num2"><br><br>
        <button>=</button>
    </center>
    </form>
    <center>
        <br>
        <p><?php echo $output ?></p>
    </center>
</body>
</html>