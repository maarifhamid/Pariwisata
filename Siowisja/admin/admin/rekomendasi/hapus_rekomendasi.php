
<?php

$id_rekomendasi  	= $_GET['id'];
$foto			= $_GET['filenya'];


if ($foto=="")
{
$query = mysqli_query($GLOBALS["___mysqli_ston"], "delete from tbl_rekomendasi where id_rekomendasi='$id_rekomendasi'");

} else {
$query = mysqli_query($GLOBALS["___mysqli_ston"], "delete from tbl_rekomendasi where gambar='$foto'");
unlink("rekomendasi/foto/$_GET[filenya]");
}


if ($query){
echo"<script>alert('data berhasil di hapus...');
document.location.href='?page=rekomendasi'; </script>\n";
}
else
{echo"<script>alert('hapus gagal');
document.location.href='?page=rekomendasi'; </script>\n";}

?>
