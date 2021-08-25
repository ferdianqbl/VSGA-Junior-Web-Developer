<?php 
include "koneksi.php"
?>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Id Anggota</th>
            <th>Foto</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
        </tr>
        </thead>
        <tbody>        
        <?php 
            $query = mysqli_query($db,"SELECT * FROM t_anggota ORDER BY id_anggota DESC");
            $data = mysqli_fetch_assoc($query);
            if(mysqli_num_rows($query) >0) {
                $no = 1;
                do{
        ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$data['nama'];?></td>
            <td><?=$data['id_anggota'];?></td>
            <td align="center"><?php echo "<img src='images/$data[foto]' width='80' height='80' />";?></td>
            <td><?=$data['jk'];?></td>
            <td><?=$data['alamat'];?></td>
        </tr>
        <?php 
                }while($data = mysqli_fetch_assoc($query));
            }else{
                echo "<tr><td colspan='7'><center>Belum ada data!</center></td></tr>";
            }
        ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</div>
