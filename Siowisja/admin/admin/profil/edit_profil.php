
      <td width="753" height="250" align="left" bgcolor="#FFFFFF"><div align="center">EDIT PROFIL
        </div>
        <table width="755" border="0">
          <tr>
            <td width="27">&nbsp;</td>
            <td width="702">&nbsp;</td>
            <td width="10">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><p align="left">        
                <form enctype="multipart/form-data" method="post" action="?page=update_profil&id=<?php echo $_GET['id'] ?>">
                  <table width="701" border="0">
                    <?php

$id = $_GET["id"];
$edit		= "select * from tbl_profil where id_profil=$id";
  $hasil	= mysqli_query($GLOBALS["___mysqli_ston"], $edit);
  $c		= mysqli_fetch_array($hasil);

?>

					<tr>
                      <td><small><strong>Judul Profil</strong></small></td>
                      <td>:</td>
                      <td><input type="text" name="judul_profil" value="<?php echo $c['judul_profil']; ?>"></td>
                    </tr>
					<tr>
                      <td><small><strong>Isi Profil </strong></small></td>
                      <td>:</td>
                      <td><textarea name="isi_profil" cols="70" rows="30" id="isi"value="<?php echo $c['isi_profil']; ?>"></textarea></td>
                    </tr>                 
                    <tr>
                      <td><small><strong>Gambar</strong></small></td>
                      <td>:</td>
                      <td><input type="file" name="fupload" id="nama_file">
						  <input type="text" name="fupload1" id="nama_file" value="<?php echo $c['gambar_profil']; ?>">
					  </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><input type="submit" name="Submit" value="Submit"></td>
                    </tr>
                  </table>
                </form>
                <p></p>
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
    