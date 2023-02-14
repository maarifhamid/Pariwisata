
<?php

$id_wisata  = $_GET['id'];
$foto		= $_GET['filenya'];


if ($foto=="")
{
$query = mysqli_query($GLOBALS["___mysqli_ston"], "delete from tbl_wisata where id_wisata='$id_wisata'");

} else {
$query = mysqli_query($GLOBALS["___mysqli_ston"], "delete from tbl_wisata where gambar='$foto'");
unlink("wisata/foto/$_GET[filenya]");
}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='?page=wisata'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='?page=wisata'; </script>\n";}


?>
