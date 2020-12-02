<?php
    include 'db/conn.php'; 
    $sql = "SELECT * FROM riwayatpendidikan";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $link_delete = "<a class='hapusData' href= 'delete.php?jenjang_pendidikan=".$row['jenjang_pendidikan']."'>
            Delete</a>";
            echo $row['jenjang_pendidikan'].$row['nama_instansi'] .".|$link_delete<br/>";
        }
    }
            
