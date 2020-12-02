<?php

include 'db/conn.php'; 

if(isset($_POST['jenjang_pendidikan'])){
    $jenjang_pendidikan = $_POST['jenjang_pendidikan'];
    $nama_instansi = $_POST['nama_instansi'];
    $sql = "INSERT INTO riwayatpendidikan VALUES ('$jenjang_pendidikan', '$nama_instansi')";
    if(mysqli_query($conn,$sql)){
        echo "Berhasil Memasukkan Data";
    } else {
        echo "Error Memasukkan Data <br/>".mysqli_error($conn);
    }
}