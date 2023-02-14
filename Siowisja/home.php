<div id="headerwrap" id="home" name="home">
			<header >
	  		 		<img src="image/Siowisja.png" style="width:500px; height:250px; margin: 0 auto;" class="img-responsive">
	  		 		<p><marquee>SISTEM INFORMASI OBJEK WISATA JAMBI </marquee></p>
	  		 		<p><b><h1 style="color:white;">SIOWISJA</h1></b></p>
	  		</header>	    
	    </div>

		
		<div id="container">
				<br>
					<p class="centered">WISATA POPULER</p>
				<br>
			<div class="row" class="grid2">
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
					$query=mysqli_query($GLOBALS["___mysqli_ston"], "select id_wisata,gambar,judul,isi from tbl_wisata where id_wisata='8'");
					while($r=mysqli_fetch_array($query))
					{
					echo"<div class='grid3'>
					<img border=2 src='admin/admin/wisata/foto/$r[gambar]' border=0 width=300 height=200> 
					 <br><strong><a href='?module=readmore&id=$r[id_wisata]'>$r[judul].</a></strong>
					 <br><br>
					".substr($r['isi'],0,100)." .....<a href='?module=readmore&id=$r[id_wisata]'>Read More</a> </p> </div>
						 
					"; 
						  
						} 

					?>
					
			
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
					$query=mysqli_query($GLOBALS["___mysqli_ston"], "select id_wisata,gambar,judul,isi from tbl_wisata where id_wisata='2'");
					while($r=mysqli_fetch_array($query))
					{
					echo"<div class='grid2'>
					<img border=2 src='admin/admin/wisata/foto/$r[gambar]' border=0 width=300 height=200> 
					 <br><strong><a href='?module=readmore&id=$r[id_wisata]'>$r[judul].</a></strong>
					 <br><br>
					".substr($r['isi'],0,100)." .....<a href='?module=readmore&id=$r[id_wisata]'>Read More</a> </p> </div>
						 
					"; 
						  
						} 

					?>
			
				
			</div>
		</div>