
      <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">DAFTAR WISATA
        </div>
        <table width="755" border="0">
        <tr>
          <td width="27">&nbsp;</td>
          <td width="702">&nbsp;</td>
          <td width="10">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><p align="left"><a href="?page=input_wisata">+ Tambah Wisata </a></p>
            <p>
              <?php


$query = "select * from tbl_wisata 
order by id_wisata ";
$sql = mysqli_query($GLOBALS["___mysqli_ston"], $query);

?>
            <table border="0">
              <tr bgcolor="#B0B0B0">
                <th><small>NO</small></th>
                <th><small>username</small></th>
                <th><small>kategori</small></th>
                <th><small>Judul </small></th>
                <th><small>Isi</small></th>
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
                <td><small><?php echo $data['kategori']; ?></small></td>
                <td><small><?php echo $data['judul']; ?></small></td>
                <td><small><?php echo $data['isi']; ?></small></td>
                <td><small><img src="wisata/foto/<?php echo $data['gambar']; ?>" height="30" width="30"></small></td>
                <td><small><a href="?page=hapus_wisata&id=<?php echo $data['id_wisata']; ?>" 
	onClick = "return confirm('Apakah Anda ingin mengapus data <?php echo $data['id_wisata']; ?>?')"> Hapus </a> | <a href="?page=edit_wisata&id=<?php echo $data['id_wisata']; ?>" >Edit</a> </small></td>
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
    