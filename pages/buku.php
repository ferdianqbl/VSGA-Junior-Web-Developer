<?php 
include'Koneksi.php';
?>

<div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Data buku
            <a href="index.php?p=buku-input" class="btn btn-sm btn-info">Tambah buku</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Buku</th>
                        <th>Id Buku</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php 
                    $batas = 5;
                    extract($_GET);
                    if(empty($hal)){
                        $posisi = 0;
                        $hal = 1;
                        $nomor = 1;
                    }else {
                        $posisi = ($hal-1)*$batas;
                        $nomor = $posisi+1;
                    }

                    if($_SERVER['REQUEST_METHOD']== "POST"){
                        $pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
                        if($pencarian != ""){
                            $sql = "SELECT * FROM t_buku WHERE nama LIKE '%pencarian%'OR id_buku LIKE '%pencarian%' OR jk LIKE '%pencarian%' OR alamat LIKE '%pencarian%'";
                            $query = $sql;
                            $queryJml = $sql;
                        }else{
                            $query = "SELECT * FROM t_buku LIMIT $posisi, $batas";
                            $queryJml = "SELECT * FROM t_buku";
                            $no = $posisi * 1;
                        }
                    }   
                    $query = mysqli_query($db, "SELECT * FROM t_buku");
                    $data = mysqli_fetch_array($query);

                    if(mysqli_num_rows($query) >0) {
                        $no = 1;
                        do{

                ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data['nama_buku'];?></td>
                        <td><?=$data['id_buku'];?></td>
                        <td>
                            <a href="index.php?p=buku-edit&id=<?=$data['id_buku'];?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="index.php?p=buku-hapus&id=<?=$data['id_buku'];?>" onclick="return confirm('Yakin Menghapus buku?');" class="btn btn-sm btn-danger">Hapus</a>
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