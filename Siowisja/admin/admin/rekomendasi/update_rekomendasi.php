<?php
include"config/fungsi_rekomendasi.php";
extract($_POST);
?>

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name']; 
  
    // Apabila ada gambar yang diupload
   if (empty($lokasi_file)){
   
    $q=mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE tbl_rekomendasi SET 
                                   username				= '$_POST[username]',
                                   judul				= '$_POST[judul]',
                                   isi					= '$_POST[isi]',
                                   WHERE id_rekomendasi	= '$_GET[id]'");
 } 
  else{
    UploadFile($nama_file);
   
    $q=mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE tbl_rekomendasi SET 
									username		= '$_POST[username]',
									judul				= '$_POST[judul]',
									isi					= '$_POST[isi]',
                  gambar			= '$nama_file'
                  WHERE id_rekomendasi	= '$_GET[id]'");
		} 
if($q){	
 
echo"<script>alert('data berhasil di update...');
document.location.href='?page=rekomendasi'; </script>\n";

} else {
echo"<script>alert('gagal di update');
document.location.href='?page=rekomendasi'; </script>\n";
}
?>

