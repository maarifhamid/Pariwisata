</div>
		   
		  </div>
		
		<section class="bagian-gambar textgambar2 gambar2">
			<div class="container">
			<br/>
			<br/>
			<br/>
			<br/>
				<p><b><h2 style="color:white;"><marquee>PROFIL WISATA KOTA JAMBI</marquee></h2></b></p>
				<hr>
				<p>SIOWISJA siap membantu Anda mencari wisata di Jambi</p>
			</div>
		</section>
<?php include"koneksi.php"; ?>
<br>
<div class="container" id="about" name="about">
			<div class="centered">
			<br>
				<?php  
						include "koneksi.php";  
					   
					$batas=10;
					$paging=@$_GET['paging'];
					if(empty($paging))
						{
						$posisi=0;
						$paging=1;
						}

					else{
						$posisi=($paging-1) * $batas;
						}
					$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_profil order by id_profil desc limit $posisi,$batas");
					while($r=mysqli_fetch_array($query))
					{
					echo"<div class='grid1'>
					<img border=2 src='admin/admin/profil/foto/$r[gambar_profil]' border=0 width=300 height=200> 
					 <br><strong><a href='?module=detailprofil&id=$r[id_profil]'>$r[judul_profil].</a></strong>
					<p>  </p> </div>
						 
					"; 
						  
						} 

					?>
			</div><!-- row -->
		</div><!-- container -->
		
		<!-- ==== SECTION DIVIDER1 -->
		<section class="bagian-gambar textgambar2 gambar1">
			<div class="container">
				<h1>BEAUTIFUL JAMBI</h1>
				<hr>
				<p>To comfort, beautiful natural beauty is the main priotas in your tourist destination</p>
			</div><!-- container -->
		</section><!-- section -->