<?php 

   $servername = "localhost";
   $username = "pemweb";
   $password = "1";
   $database = "cv";

   $conn = mysqli_connect($servername,$username,$password,$database);

   if(!$conn) {
	die("Connection failed :" .mysqli_connect_error());
   }
   