<?php 
include'Koneksi.php';
?>

<div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Data Anggota
            <a href="index.php?p=anggota-input" class="btn btn-sm btn-info">Tambah Anggota</a>
            <a href="index.php?p=cetak" class="btn btn-lg btn-primary bx bx-printer"></a>
        </div>
        <div class="card-body">
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
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php 
                            $query = mysqli_query($db,"select * from t_anggota");
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
                            <td>
                            <a href="index.php?p=anggota-hapus&id=<?=$data['id_anggota'];?>" class="btn btn-sm btn-primary">Cetak Kartu</a>
                            <a href="index.php?p=anggota-edit&id=<?=$data['id_anggota'];?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="index.php?p=anggota-hapus&id=<?=$data['id_anggota'];?>" onclick="return confirm('Yakin Menghapus anggota?');" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                                }while($data = mysqli_fetch_assoc($query));
                            }else{
                                echo "<tr><td colspan='7'><center>Belum ada data!</center></td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>