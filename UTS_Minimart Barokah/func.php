<?php 
$conn = mysqli_connect("localhost", "pemweb", "1", "barokah");

function read($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$record = [];

	while($data = mysqli_fetch_assoc($result)){
		$record[] = $data; 
	}
	return $record;
	echo mysqli_error($conn);
}

function search_id_barang($cari){
	$query = 
	"SELECT barang.id_barang, barang.nama_barang, barang.harga_barang, barang.jumlah_stok, kategori.nama_kategori FROM barang, kategori WHERE 
	barang.id_barang LIKE '%$cari%' AND 
	kategori.id_kategori = barang.id_kategori;"
	;

	return read($query);
}

function search_nama_barang($cari){
	$query = 
	"SELECT barang.id_barang, barang.nama_barang, barang.harga_barang, barang.jumlah_stok, kategori.nama_kategori FROM barang, kategori WHERE 
	barang.nama_barang LIKE '%$cari%' AND 
	kategori.id_kategori = barang.id_kategori;"
	;

	return read($query);
}

function search_kategori($cari){
	$query = 
	"SELECT barang.id_barang, barang.nama_barang, barang.harga_barang, barang.jumlah_stok, kategori.nama_kategori FROM barang, kategori WHERE 
	kategori.nama_kategori LIKE '%$cari%' AND 
	kategori.id_kategori = barang.id_kategori;"
	;

	return read($query);
}

function search_min_harga($cari){
	$query = 
	"SELECT barang.id_barang, barang.nama_barang, barang.harga_barang, barang.jumlah_stok, kategori.nama_kategori FROM barang, kategori WHERE 
	barang.harga_barang <= $cari AND 
	kategori.id_kategori = barang.id_kategori;"
	;

	return read($query);
}

function search_max_harga($cari){
	$query = 
	"SELECT barang.id_barang, barang.nama_barang, barang.harga_barang, barang.jumlah_stok, kategori.nama_kategori FROM barang, kategori WHERE 
	barang.harga_barang >= $cari AND 
	kategori.id_kategori = barang.id_kategori;"
	;

	return read($query);
}

?>