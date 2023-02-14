</div>
		   
		  </div>
		  
		</div>
		
	  </div>

</div>
		
		<section class="bagian-gambar textgambar2 gambar3">
			<div class="container">
			<br/>
			<br/>
				<p><b><h2 style="color:white;"><marquee>RATING WISATA DI JAMBI</marquee></h2></b></p>
				<hr>
				<p>SIOWISJA siap membantu Anda mencari wisata di Jambi</p>
			</div><!-- container -->
		</section><!-- section -->
<?php include"koneksi.php"; ?>


			<!-- /row -->
			<br>
			<br>
		<!-- /row -->
<!-- /container -->
	
	

<div class="wrapper "  >
	  <div class="container">
		<div class="content">
		  <div id="featured_slide " >
		  
		   
		   <div>
			  
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
					$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_rating order by id_rating desc limit $posisi,$batas");
					while($r=mysqli_fetch_array($query))
					{
					echo"<div class='grid1'>
					<img border=2 src='admin/admin/rating/foto/$r[gambar_wisata]' border=0 width=300 height=200> <br>
					 <strong><a href='?module=detail&id=$r[id_rating]'>$r[judul_wisata].</a></strong>
					 <br><br>
					<p>  </p> </div>
						 
					"; 
						  
						} 

					?>

		   </div>
		   
		  </div>
		  
		</div>
		
	  </div>

</div>