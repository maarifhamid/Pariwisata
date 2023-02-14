<?php
include"config/fungsi_profil.php";
extract($_POST);
?>

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name']; 
  
    // Apabila ada gambar yang diupload
   if (empty($lokasi_file)){
   
    $q=mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE tbl_profil SET 
                                   judul_profil			= '$_POST[judul_profil]',
                                   isi_profil			= '$_POST[isi_profil]',
                                    WHERE id_profil		= '$_GET[id]'");
 } 
  else{
    UploadFile($nama_file);
   
    $q=mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE tbl_profil SET 
									judul_profil		= '$_POST[judul_profil]',
									isi_profil			= '$_POST[isi_profil]',
                                    gambar_profil		= '$nama_file'
                                    WHERE id_profil		= '$_GET[id]'");
		} 
if($q){	
 
echo"<script>alert('data berhasil di update...');
document.location.href='?page=profil'; </script>\n";

} else {
echo"<script>alert('gagal di update');
document.location.href='?page=profil'; </script>\n";
}
?>

