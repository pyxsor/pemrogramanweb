<?php

    include ('db/conn.php');

		if($_SERVER['REQUEST_METHOD'] === 'POST') {
        	$sku = $_POST['sku'];
			$nama_barang = $_POST['nama_barang'];
        	$kategori = $_POST['kategori'];
        	$stok = $_POST['stok'];
        	$harga = $_POST['harga'];

    
        $update ="UPDATE barang 
                SET sku = '$sku', nama_barang='$nama_barang', kategori='$kategori', stok='$stok',harga='$harga'
                WHERE sku = '$sku'";
        $res = mysqli_query(connection(), $update);
        header("Location: http://localhost/barokah/");
    }


    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $sku = $_GET['id'];
        $sql_get ="SELECT * FROM barang WHERE sku = $sku";
        $res_get = mysqli_query(connection(),$sql_get);
        
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Data</title>
		<link href="css/style.css" rel="stylesheet"/>
		<link href="css/960.css" rel="stylesheet"/>
    </head>
    <body>
		<div class="wrapper">
		<div class="container_16">
			<div class="grid_8 push_6">
        <h1>Update Data</h1>
				<table>
        <form action="update.php" method="POST">
            <?php while($data = mysqli_fetch_array($res_get)) : ?>
			<tr>
						<td>
							 SKU 
						</td>
						<td>
						: <?php echo $data['sku']; ?> <input type="hidden" name="sku" value="<?php echo $data['sku']; ?>"><br>
						</td>
			</tr>
			<tr>
						<td>
							 Nama Barang 
						</td>
						<td>
						: <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"><br>
						</td>
			</tr>
			<tr>
						<td>
							 Kategori 
						</td>
						<td>
						: <select name="kategori">
                    	<option selected disabled>----Pilih----</option>
                   		<option value="Makanan" <?php echo $data['kategori']=='Makanan'? 'selected="selected"' : '' ?>>Makanan</option>
                   		<option value="Minuman" <?php echo $data['kategori']=='Minuman'? 'selected="selected"' : '' ?>>Minuman</option>
						<option value="Alat Tulis Kerja" <?php echo $data['kategori']=='Alat Tulis Kerja'? 'selected="selected"' : '' ?>>Alat Tulis Kerja</option>
						<option value="Other" <?php echo $data['kategori']=='Other'? 'selected="selected"' : '' ?>> Other</option>
                		</select><br>
						</td>
			</tr>
			<tr>
						<td>
							 Stok
						</td>
						<td>
						: <input type="text" name="stok" value="<?php echo $data['stok']; ?>"><br>
						</td>
			</tr>
			<tr>
						<td>
							 Harga
						</td>
						<td>
						: <input type="text" name="harga" value="<?php echo $data['harga']; ?>"><br>
						</td>
			</tr>
			</table>
			<div class="push_2">
			<br>
            <input type="submit" name="submit" value="Update">
			</div>
            <?php endwhile; ?>
			
        </form>
		
		</div>
		</div>
			<br><br><br><br><br>
		</div>
    </body>
</html>