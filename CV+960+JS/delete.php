<?php
   include ('db/conn.php'); 
    $sql = "DELETE FROM riwayatpendidikan WHERE jenjang_pendidikan='".$_GET['jenjang_pendidikan']."'";
    $res = mysqli_query($conn,$sql);
        
