
<?php

include"config/fungsi_rating.php";

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];


$username			= $_POST['username'];
$judul_wisata		= $_POST['judul_wisata'];
$isi_informasi			= $_POST['isi_informasi'];


if (empty ($judul_wisata) or empty($isi_informasi) )
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='?page=input_rating'; </script>\n"; exit ;
}


if (!empty($lokasi_file))
   {
    UploadFile($nama_file);

		$query = mysqli_query($GLOBALS["___mysqli_ston"], 'insert into tbl_rating (username,judul_wisata,isi_informasi,tanggal_upload,gambar_wisata)values("'.$username.'"
		,"'.$judul_wisata.'"
		,"'.$isi_informasi.'"
		,"'.$nama_file.'")');
		} else {
		$query=mysqli_query($GLOBALS["___mysqli_ston"], 'insert into tbl_rating (username,judul_wisata,isi_informasi,tanggal_upload,gambar_wisata)values("'.$username.'"
		,"'.$judul_wisata.'"
		,"'.$isi_informasi.'"
		,"'.$nama_file.'")');
				
				}

if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='?page=rating'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='?page=rating'; </script>\n";
}
?>