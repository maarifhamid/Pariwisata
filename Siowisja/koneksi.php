<?php 

// koneksi mysql ke php
($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost", "root", ""));
mysqli_select_db($GLOBALS["___mysqli_ston"], "db_siowisja");
?>