<?php
include ('db/conn.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Barakoh Mart</title>
	
	<link href="css/960.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

</head>
	
<body>
	
	<div class="wrapper">
	<div class="box">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div class="grid_3">
	<h1>Barokah Mart</h1>
	</div>
	<div class="clear"></div>
	<div class="container_16">
	
	<a href="insert.php"><h3>+ Tambah Barang</h3></a>
	
	<div class="grid_8 push_4">
	<table border="1px">
    <thead>
            <tr>
                <td>SKU</td>
                <td>Nama Barang</td>
                <td>Kategori</td>
                <td>Stok</td>
                <td>Harga Satuan</td>
				<td>Aksi</td>
			</tr>
        </thead>
        <tbody>
            <?php
            $view = "SELECT * FROM barang";
            $res = mysqli_query(connection(),$view);
            ?>

            <?php while($data = mysqli_fetch_array($res)) : ?>
                <tr>
                <td><?php echo $data['sku'] ?></td>
                <td><?php echo $data['nama_barang'] ?></td>
                <td><?php echo $data['kategori'] ?></td>
                <td><?php echo $data['stok'] ?></td>
                <td><?php echo $data['harga'] ?></td>
                <td>
                    <a href="http://localhost/barokah/update.php?id=<?php echo $data['sku']?>">Update</a>
                    <a href="http://localhost/barokah/delete.php?id=<?php echo $data['sku']?>" onclick="return confirm('Hapus Data <?php echo $data['nama_barang']?>')";>Delete</a>
                </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
	</div>
	<div class="clear"></div>
	
	<br>
	<div class="push_5">
	<form action="search.php" method="GET">
		<label>Cari : </label>
		<input type="text" name="cari" placeholder="Apapun">
		<input type="submit" value="Cari">
    </form>
	</div>
	
	<div class="grid_8 push_4">
	<form action="comp.php" method="post">
			<div class="harga">
            <h4 align="center">=====Filter Harga=====</h4>
			</div>
			<table>
                <tr>
                    <td>
                        <label for="min_harga">Min : </label>
                        <input type="text" name="min_harga" id="min_harga">
                    </td>

                    <td>
                        <label for="max_harga">Max : </label>
                        <input type="text" name="max_harga" id="max_harga">
                    </td>
                    <td>
                        <button type="submit" name="filter">Filter</button>
                    </td>
                </tr>
                </tr>
            </table>
        </form>
		</div>
	</div>
</body>
</html>