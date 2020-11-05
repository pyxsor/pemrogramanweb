<?php 

function connection() {
   $dbServer = 'localhost';
   $dbUser = 'pemweb';
   $dbPass = '1';
   $dbName = "barokah";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

   if(! $conn) {
	die('Koneksi gagal: ' . mysqli_error());
   }
   mysqli_select_db($conn,$dbName);
	
   return $conn;
}