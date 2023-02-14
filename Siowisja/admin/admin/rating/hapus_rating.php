
<?php

$id_rating  = $_GET['id'];
$foto		= $_GET['filenya'];


if ($foto=="")
{
$query = mysqli_query($GLOBALS["___mysqli_ston"], "delete from tbl_rating where id_rating='$id_rating'");

} else {
$query = mysqli_query($GLOBALS["___mysqli_ston"], "delete from tbl_rating where gambar_rating='$foto'");
unlink("rating/foto/$_GET[filenya]");
}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='?page=rating'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='?page=rating'; </script>\n";}

?>
