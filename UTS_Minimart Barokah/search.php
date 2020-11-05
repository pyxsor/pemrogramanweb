<?php
include('db/conn.php');

if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = "SELECT * FROM barang WHERE 
		nama_barang LIKE '%$cari%' OR 
		SKU LIKE '%$cari%' OR
		kategori LIKE '%$cari%' OR
		stok LIKE '%$cari%' OR
		harga LIKE '%$cari%'";
    $search = mysqli_query(connection(), $query);
} else {
    $query = "SELECT * FROM barang";
    $search = mysqli_query(connection(), $query);
}
?>

<html>

<head>
    <title>Search Result</title>
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/960.css" rel="stylesheet"/>
</head>

<body>
	<div class="wrapper">
	<h2>Result</h2>
    <div class="container">
        <table border="1px">
            <tr>
                <th>SKU</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga Satuan</th>
            </tr>

            <?php while ($data = mysqli_fetch_array($search)) : ?>
                <tr>
                    <td><?php echo $data['sku']; ?></td>
                    <td><?php echo $data['nama_barang']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><?php echo $data['stok']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <button onclick="window.location.href='http://localhost/barokah/'">Kembali</button>
    </div>
	</div>
</body>

</html>