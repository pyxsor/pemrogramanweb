<?php
include('db/conn.php');

if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $sku = $_GET['id'];
        $sql_get = "DELETE FROM barang WHERE sku = '$sku'";
        $res_get = mysqli_query(connection(),$sql_get);

        header("Location: http://localhost/barokah/");
    
}
?>