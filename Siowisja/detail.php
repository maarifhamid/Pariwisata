<?php 
include "koneksi.php";
$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_rating where id_rating='$_GET[id]'");
$data=mysqli_fetch_array($query);
?>

<br>
<div class="wrapper">
      <div class="row">
      <div class="col-md-3" style="margin:30px;">
     <img src="admin/admin/rating/foto/<?php echo $data['gambar_wisata']; ?>" style="width:300px; height:250px;">   
    </div>
      <div class="col-md-6" style="margin-left:10px ; margin-top:10px;">
        <center> <td><b>Detail Rating </b></td> </center>
		<table>
        	<tr>
        		<h3><td style="padding: 20px; padding-right: 80px;"><b>Judul</b></td>		<td> : <?php echo $data['judul_wisata']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td style="padding: 20px; padding-right: 60px;"><b>Isi</b></td>	 <td> <?php echo $data['isi_informasi']; ?></td></h3>
        	</tr>
        </table><br><br>
         
    </div>
</div>

<html>
<head>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>
<body>
<div class="container">
    <div class="row">
 
<form action="tambah_rating.php" method="post">
 
    <div>
        <h3>Rating untuk wisata</h3>
    </div>

    <div>
      <td>
        <tr>
    <label style="float :left;width: 90px; font-family: sans-serif; color: black;" for="user name"> Nama</label>
        <input type="text" name="name" placeholder="Masukkan Nama">
      </td>
    </div>
<br>
      <div>
        <td>
        <tr>
    <label style="float :left;width: 90px; font-family: sans-serif; color: black;" for="user name"> Wisata</label>
        <input type="text" name="wisata" placeholder="Nama Wisata">
      </td>
    </div>
 
         <div class="rateyo" id= "rating"
         data-rateyo-rating="0"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
 
    <span class='result'>0</span>
    <input type="hidden" name="rating">
 
    </div>
 
<button style="float :left; width: 100px;  height: auto; background: #29447E; border: 0; padding: 5px 10px; font-family: verdana; border-radius: 20px; color: white; " type="reset">Batal</button>

    <button style="float :left; width: 100px;  height: auto; background: #29447E; border: 0; padding: 5px 10px; font-family: verdana; border-radius: 20px; color: white; "type="submit">Simpan</button>

 
</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //tambah rating ke field
        });
    });
 
</script>
</body>
 
</html>
