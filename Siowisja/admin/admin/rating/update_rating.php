<?php
include"config/fungsi_rating.php";
extract($_POST);
?>

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name']; 
$tgl         =date('Y-m-d');
  
    // Apabila ada gambar yang diupload
   if (empty($lokasi_file)){
   
    $q=mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE tbl_rating SET 
									username			= '$_POST[username]',
                                   judul_wisata			= '$_POST[judul_wisata]',
                                   isi_informasi		= '$_POST[isi_informasi]',
                                    WHERE id_rating		= '$_GET[id]'");
 } 
  else{
    UploadFile($nama_file);
   
    $q=mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE tbl_rating SET 
									username			= '$_POST[username]',
                                   judul_wisata			= '$_POST[judul_wisata]',
                                   isi_informasi			= '$_POST[isi_informasi]',
                                    gambar_wisata		= '$nama_file'
                                    WHERE id_rating		= '$_GET[id]'");
		} 
if($q){	
 
echo"<script>alert('data berhasil di update...');
document.location.href='?page=rating'; </script>\n";

} else {
echo"<script>alert('gagal di update');
document.location.href='?page=rating'; </script>\n";
}
?>

