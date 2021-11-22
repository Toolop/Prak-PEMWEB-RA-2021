
<?php 
session_start();
    if(empty($_SESSION['mangga'])){
        $_SESSION['mangga'] = 1;
    }elseif(isset($_POST['tambah'])){
        $_SESSION['mangga']++;
    }
    elseif(isset($_POST['kurang']) && $_SESSION['mangga'] > 0){
        $_SESSION['mangga']--;
    }
    else if(empty($_SESSION['jambu'])){
        $_SESSION['jambu'] = 1;
    }elseif(isset($_POST['tambahjmb'])){
        $_SESSION['jambu']++;
    }
    elseif(isset($_POST['kurangjmb']) && $_SESSION['jambu'] > 0){
        $_SESSION['jambu']--;
    }
    else if(empty($_SESSION['salak'])){
        $_SESSION['salak'] = 1;
    }elseif(isset($_POST['tambahslk'])){
        $_SESSION['salak']++;
    }
    elseif(isset($_POST['kurangslk']) && $_SESSION['salak'] >  0){
        $_SESSION['salak']--;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="119140060.css">
</head>
<body>
    <h1>Toko Buah ITERA</h1><br>

    
    <div class="card">
        <div class="judul">
            <div class="gambar">
                <img src="asset/mangga.jpg" alt="">
            </div>
            <div class="judul-isi">
                <p>Mangga</p>
                <p>Rp.15.000/kg</p>
            </div>
        </div>
        <div class="inputan">
            <form name="form" method="post" action="">
                <button id="tambah" name="tambah" class = "tambah" value="tmbhmangga">+</button>
                <input type="text" name="mangga" class="inputbuah" id="mangga" value="<?php echo $_SESSION['mangga']-1 ?>">
                <button id="kurang_mangga" name="kurang" class = "kurang" onclick="kurangmg()" value="kurang">-</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="judul">
            <div class="gambar">
                <img src="asset/jambu.jpg" alt="">
            </div>
            <div class="judul-isi">
                <p>Jambu</p>
                <p>Rp.13.000/kg</p>
            </div>
        </div>
        <div class="inputan">
            <form name="form" method="post" action="">
                <button id="tambahjmb" name="tambahjmb" value="tambahjmb" class = "tambah" onclick="tmbhjmb()">+</button>
                <input type="text" class="inputbuah" name="jambu"  id="jambu" value="<?php echo $_SESSION['jambu'] -1;?>" >
                <button id="kurangjmb" name="kurangjmb" value="kurangjmb" class = "kurang" onclick="kurangjmb()">-</button>
            </form>
        </div>

    </div>

    <div class="card">
        <div class="judul">
            <div class="gambar">
                <img src="asset/salak.png" alt="">
            </div>
            <div class="judul-isi">
                <p>Salak</p>
                <p>Rp.10.000/kg</p>
            </div>
        </div>
        <div class="inputan">
        <form name="form" method="post" action="">
                <button id="tambahslk" name="tambahslk" value="tambahslk" class = "tambah" onclick="tmbhslk()">+</button>
                <input type="text" class="inputbuah" name="salak"  id="salak" value="<?php echo $_SESSION['salak']-1 ;?>" >
                <button id="kurangslk" name="kurangslk" value="kurangslk" class = "kurang" onclick="kurangslk()">-</button>
        </form>
        </div>
        
    </div>

    <div class="bottom">
        <p id="total">Total : Rp.<?php include 'class.php';?>,- </p>
        <input type="image"  id="keranjang" src="asset/keranjang.png " onclick="beli()"/>
    </div>
    <script>
        function beli(){
            alert("Total anda Rp.<?php echo $hasil ?>,- Terima Kasih Sudah Berbelanja di Toko Buah Itera");
            
        }
    </script>
    
    
</body>
</html>

