
      <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">DAFTAR RATING WISATA
        </div>
        <table width="755" border="0">
        <tr>
          <td width="27">&nbsp;</td>
          <td width="702">&nbsp;</td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><p align="left"><a href="?page=input_rating">+ Tambah Rating Wisata </a></p>
            <p>
              <?php


$query = "select * from tbl_rating
order by id_rating ";
$sql = mysqli_query($GLOBALS["___mysqli_ston"], $query);

?>
            <table border="0">
              <tr bgcolor="#B0B0B0">
                <th><small>NO</small></th>
                <th><small>username</small></th>
                <th><small>Judul Wisata</small></th>
                <th><small>Isi Informasi</small></th>
                <th><small>Gambar</small></th>
                <th><small>AKSI</small></th>
              </tr>
              <?php
$no=1;
while ($data=mysqli_fetch_array($sql))
{
?>
              <tr bgcolor="#E4E4E4">
                <td><small><?php echo $no?></small></td>
                <td><small><?php echo $data['username']; ?></small></td>
                <td><small><?php echo $data['judul_wisata']; ?></small></td>
                <td><small><?php echo $data['isi_informasi']; ?></small></td>
                <td><small><img src="rating/foto/<?php echo $data['gambar_wisata']; ?>" height="30" width="30"></small></td>
                <td><small><a href="?page=hapus_rating&id=<?php echo $data['id_rating']; ?>" 
	onClick = "return confirm('Apakah Anda ingin mengapus data <?php echo $data['id_rating']; ?>?')"> Hapus </a> | <a href="?page=edit_rating&id=<?php echo $data['id_rating']; ?>" >Edit</a> </small></td>
              </tr>
              <?php
$no++;
}
?>
            </table>
            <p></p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    