<?php
    include "koneksi.php";

    $editnim=$_POST["editnim"];
    $editnama=$_POST["editnama"];
    $editprodi=$_POST["editprodi"];
    $editangkatan=$_POST["editangkatan"];

    $sql = "UPDATE mahasiswa SET nama = '$editnama', prodi = '$editprodi', angkatan = '$editangkatans'  WHERE nim = '$editnim' ";
    $hasil=mysqli_query($kon,$sql);
    if($hasil){
        echo "Berhasil di edit";
    }
    else{
        echo "gagal";
    }

?>
