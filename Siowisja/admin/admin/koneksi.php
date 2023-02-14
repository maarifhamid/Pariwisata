<?php 
$servername = "localhost";
$user		= "root";
$pasword	= "";
$db			= "db_siowisja";

$koneksi = ($GLOBALS["___mysqli_ston"] = mysqli_connect($servername, $user,  $password))
			or die ('gagal terkoneksi'.mysqli_error($GLOBALS["___mysqli_ston"]));
			
$database = mysqli_select_db($GLOBALS["___mysqli_ston"], $db)
			or die ('gagal terhubung ke database'.mysqli_error($GLOBALS["___mysqli_ston"]));
?>