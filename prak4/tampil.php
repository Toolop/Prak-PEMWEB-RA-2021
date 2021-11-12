<table border='1'>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Action</th>
    </tr>
    <?php
        include "koneksi.php";
        $hasil=mysqli_query($kon,"select * from mahasiswa order by nim asc");
        $no=0;
        while ($data = mysqli_fetch_array($hasil)):
                $no++;
    ?>

    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['prodi']; ?></td>
        <td><?php echo $data['angkatan']; ?></td>
        <td>
            <button class="edit" value="<?php echo $data['nim']; ?>">Edit</button>
            <button class="delete" value="<?php echo $data['nim']; ?>">Delete</button>
        </td>
    </tr>

        <?php endwhile;?>

    <div id="bg"></div>
	<div id="modal-kotak">
        
		<div id="atas">
            <button id="tutup">CLOSE</button>
		</div>

		<div id="bawah">
            <form method="POST" id="edit_mhs">
                <label>NIM : </label>
                <input type="number" name="editnim" id="editnim"><br>
                <label>Nama</label>
                <input type="text" name="editnama" id="editnama"><br>
                <label>Prodi</label>
                <select name="editprodi" id="editprodi">>
                    <option selected="selected">-- pilih prodi</option>
                    <option value="IF">Teknik Informatika</option>
                    <option value="EL">Teknik Elektro</option>
                    <option value="SI">Teknik Sipil</option>
                    <option value="TG">Teknik Geomatika</option>
                    <option value="MA">Matematika</option>
                </select>
                <br>
                <label>Angkatan</label>
                <input type="number" name="editangkatan" id="editangkatan">><br>
            </form>
            <button id="editsub">edit</button>
        </div>
    </div>

    <script>
        $(".delete").click(function(){  
            var nim = $(this).attr("value");
                $.ajax({
                    type : 'POST',
                    url  : "delete.php",
                    data : {
                        nim: nim
                    },
                    cache : false,
                    success : function(data){
                        alert("data dengan nim " + nim + " berhasil dihapus");
                        $("#tampil").load("tampil.php");
                }
            });
        });

        $(".edit").click(function(){  
            $('#modal-kotak , #bg').fadeIn("slow");
            var data = $(this).attr("value");
            $("#editnim").val(data);
        });

        $("#editsub").click(function(){ 
           var data = $("#edit_mhs").serialize();
            $.ajax({
                type : 'POST',
                url  : "edit.php",
                data : {
                        editnim: $("#editnim").val(),
                        editnama: $("#editnama").val(),
                        editprodi: $("#editprodi").val(),
                        editangkatan: $("#editangkatan").val(),
                        },
                cache : false,
                success : function(data){
                    alert(data);
                    $("#tampil").load("tampil.php");
                }
            });
        });

        $("#tutup").click(function(){
            $('#modal-kotak , #bg').fadeOut("slow");
        });
    </script>
</table>
