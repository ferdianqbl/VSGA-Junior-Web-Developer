<?php 
include'Koneksi.php';
?>

<div class="container-fluid">
    <div class="card mb-3">
        <div class="card-header">
            <div class="row justify-content-between">
                <div class="col-4">
                    <i class="fas fa-table"></i> Data Anggota
                    <a href="index.php?p=anggota-input" class="btn btn-sm btn-info">Tambah Anggota</a>
                    <a target="_blank" href="pages/cetak.php" class="btn btn-lg btn-primary bx bx-printer"></a>
                </div>
                <div class="col-4">
                    <form class="d-flex" method="POST">
                        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="pencarian">
                        <button class="btn btn-primary" type="submit" name="search" value="search" > Search</button>
                    </form>
                </div>
            </div>
        </div>
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
                            $sql = "SELECT * FROM t_anggota WHERE nama LIKE '%pencarian%' OR id_anggota LIKE '%pencarian%' OR jk LIKE '%pencarian%' OR alamat LIKE '%pencarian%'";
                            $query = $sql;
                            $queryJml = $sql;
                        }else{
                            $query = "SELECT * FROM t_anggota LIMIT $posisi, $batas";
                            $queryJml = "SELECT * FROM t_anggota";
                            $no = $posisi * 1;
                        }
                    }   
                    $query = mysqli_query($db, "SELECT * FROM t_anggota");
                    $data = mysqli_fetch_array($query);

                    if(mysqli_num_rows($query) >0) {
                        $no = 1;
                        do{
                            if(empty($data['foto'])or($data['foto'] =='-')){
                                $foto = "admin-no-photo.png";           
                            }else {
                                $foto = $data['foto'];
                            }         
                ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data['nama'];?></td>
                        <td><?=$data['id_anggota'];?></td>
                        <td align="center"><?php echo "<img src='images/$foto' width='80' height='80' />";?></td>
                        <td><?=$data['jk'];?></td>
                        <td><?=$data['alamat'];?></td>
                        <td>
                            <a target="_blank" href="pages/cetak-kartu.php?id=<?=$data['id_anggota'];?>" class="btn btn-sm btn-primary">Cetak Kartu</a>
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