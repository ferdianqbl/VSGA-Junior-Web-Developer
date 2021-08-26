<?php 
include "../Koneksi.php";

$id_anggota = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM t_anggota WHERE id_anggota='$id_anggota'");
$data = mysqli_fetch_array($query);
if(empty($data['foto']) or ($data['foto']=='-')){
    $foto = "admin-no-photo.png";
}else{
    $foto = $data['foto'];
}
?>

<div id="label-page"><h3>Kartu Anggota</h3></div>
<div id="content">
    <table id="tabel-input">
        <tr>
            <td class="label-formulir">FOTO</td>
            <td class="isian-formulir">
                <img src="../images/<?php echo $foto; ?>" width=70px height=75px>
            </td>
        </tr>
        <tr>
            <td class="label-formulir">ID ANGGOITA</td>
            <td class="isian-formulir">
                <?php echo $data['id_anggota']; ?>
            </td>
        </tr>     
        <tr>
            <td class="label-formulir">NAMA/td>
            <td class="isian-formulir">
                <?php echo $data['nama']; ?>
            </td>
        </tr>    
        <tr>
            <td class="label-formulir">Jenis Kelamin/td>
            <td class="isian-formulir">
                <?php echo $data['jk']; ?>
            </td>
        </tr>  
        <tr>
            <td class="label-formulir">Alamat/td>
            <td class="isian-formulir">
                <?php echo $data['alamat']; ?>
            </td>
        </tr> 
    </table>
</div>
<script>
    widndow.print();
    </script>
