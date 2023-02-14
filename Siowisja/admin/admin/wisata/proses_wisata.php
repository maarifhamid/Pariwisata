
<?php

include"config/fungsi_gambar.php";

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];


$username		= $_POST['username'];
$kategori		= $_POST['kategori'];
$judul			= $_POST['judul'];
$isi			= $_POST['isi'];


if (empty ($kategori) or empty ($judul) or empty($isi) )
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='?page=input_wisata'; </script>\n"; exit ;
}


if (!empty($lokasi_file))
   {
    UploadFile($nama_file);

		$query = mysqli_query($GLOBALS["___mysqli_ston"], 'insert into tbl_wisata (username,kategori,judul,isi,gambar)values("'.$username.'"
		,"'.$kategori.'"
		,"'.$judul.'"
		,"'.$isi.'"
		,"'.$nama_file.'")');
		} else {
		$query=mysqli_query($GLOBALS["___mysqli_ston"], 'insert into tbl_wisata (username,kategori,judul,isi,gambar)values("'.$username.'"
		,"'.$kategori.'"
		,"'.$judul.'"
		,"'.$isi.'"
		,"'.$nama_file.'")');
				
				}

if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='?page=wisata'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='?page=wisata'; </script>\n";
}
?>