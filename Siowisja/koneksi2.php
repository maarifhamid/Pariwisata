<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'db_siowisja');
 
// Buat Koneksinya untuk menghubungkan komentar ke database
$db1 = new mysqli(HOST, USER, PASS, DB1);
?>