<?php
 include("koneksi.php");
 
 $usr = $_POST['user'];
 $psw = ($_POST['pass']);
  

 $sql = "SELECT * FROM admin WHERE username='$usr' AND password='$psw'";
 $res =  mysqli_query($GLOBALS["___mysqli_ston"], $sql);
 $data = mysqli_fetch_array($res);
 $n = mysqli_num_rows($res);

 if($n == 1){
  session_start();
 
   
  $_SESSION['usernameku'] = $usr;
  $_SESSION['passwordku'] = $psw;
  
 
  echo"<script language='javascript'>window.location = 'admin/index.php'</script>";
 }else{
  echo"<script language='javascript'>alert('Username atau Password Salah !')</script>";
  echo"<script language='javascript'>window.location = 'index.php'</script>";
 }
?>
