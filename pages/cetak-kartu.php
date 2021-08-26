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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
  <h1>P</h1>
</body>
</html>
