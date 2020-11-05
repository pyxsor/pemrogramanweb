<?php
include ('db/conn.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sku = $_POST['sku'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $insert ="INSERT INTO barang (sku, nama_barang, kategori, stok, harga)
             VALUES ('$sku', '$nama_barang', '$kategori', '$stok', '$harga')";
    $res = mysqli_query(connection(), $insert);
    header("Location: http://localhost/barokah/");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data</title>
		<link href="css/style.css" rel="stylesheet" />
		<link href="css/960.css" rel="stylesheet"/>
    </head>
    <body>
		<div class="wrapper">
		<div class="container_16">
			<div class="grid_8 push_6">
        <h1>Tambah Data</h1>
		<table>
				<form action="insert.php" method="POST">
					<tr>
						<td>
							 SKU 
						</td>
						<td>
						: <input type="text" name="sku"><br>
						</td>
					</tr>
					<tr>
						<td>
							Nama Barang 
						</td>
						<td>
						: <input type="text" name="nama_barang"><br>
						</td>
					</tr>
            		<tr>
						<td>
							Kategori 
						</td>
						<td>
						: <select name="kategori">
                    		<option selected disabled> -----Pilih-----</option>
                    		<option value="Makanan">Makanan</option>
                   			<option value="Minuman">Minuman</option>
							<option value="Alat Tulis Kerja">Alat Tulis Kerja</option>
							<option value="Other">Other</option>
                			</select>
                			<br>
						</td>
					</tr>
					<tr>
						<td>
							Stok 
						</td>
						<td>
						: <input type="text" name="stok"><br>
						</td>
					</tr>
					<tr>
						<td>
							Harga
						</td>
						<td>
						: <input type="text" name="harga"><br>
						</td>
					</tr>
				</table>
			<br>
			<input type="submit" name="submit" value="Simpan">
        </form>
		</div>
		</div>
			<br><br><br>
		</div>
    </body>
</html>