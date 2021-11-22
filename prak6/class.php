<?php 

    class Buah {
        var $nama;
        var $jumlah;
        var $harga;
        var $total = 0;


        public function __construct($nama,$jumlah,$harga){
            $this->nama = $nama;
            $this->jumlah = $jumlah;
            $this->harga = $harga;
            $this->total += $this->harga * $this->jumlah;
        }
        public function hasil(){
            return $this->total;
        }

    }

    $mangga = new Buah("mangga",$_SESSION['mangga']-1,15000);
    $jambu = new Buah("jambu",$_SESSION['jambu']-1,13000);
    $salak = new Buah("salak",$_SESSION['salak']-1,10000);
    $hasil = $mangga->hasil() + $jambu->hasil() + $salak->hasil();
    echo $hasil;
?>
