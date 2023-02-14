<!DOCTYPE html>
<?php include "fungsi_kalender.php";?> 
<html lang="en"> 
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title> SIOWISJA</title> 
    
    <link href="assets/css/fixstyle.css" rel="stylesheet"> 
     <link rel="stylesheet" href="assets/css/icomoon.css"> 

</head>
<link rel="shortcut icon" href="image/Siowisja.png" type="image"> 
<body>
<div>
        <div class="nav"> 
          <ul>
            <li><a href="?module=home">Home</a></li> 
			<li> <a href="?module=profil">Profil</a></li>
			<li> <a href="?module=rekomendasi"> Rekomendasi</a></li>
			<li> <a href="?module=wisata"> Wisata</a></li>
			<li> <a href="?module=rating"> Rating</a></li>
			<li> <a href="?module=saran"> Saran</a></li>
		</div>
		<div>
			
		</div>
</div>

<br>
    
		
<?php include"content.php"; ?> 
		 		
					
        <br>
		<br>
			<section class="box"> 
				<div class="container" id="contact" na="contmeact">
					<div class="row"> 
						<br>
							<h2 class="centered">THANKS FOR VISITING US</h2> 
							<hr>
						<br>
					</div>
				</div>
			</section>
            <br>
			<br>
			<div class="grid1"> 
					<h3>Contact Information</h3>
					<p><span class="icon icon-home"> <a href="https://bit.ly/2VkfOAZ"></span> Jl. Raya Jambi - Muara Bulian KM.15 Mendalo Indah Muaro Jambi, Jambi, Indonesia.</a><br/>
						<span class="icon icon-phone"> <a href="tel:0751 93632"> </span> 0751 93632 </a><br/>
						<span class="icon icon-envelop"></span> <a href="https://www.gmail.com/"> siowisja@gmail.com</a> <br/>
						<span class="icon icon-facebook"></span> <a href="https://www.facebook.com/siowisja">  Siowisja </a> <br/>
					</p>
				</div>
				
				<div class="grid1"> 
						<div id='judul_header'>&#187; Calender </div>
			
									<?php 
						  $tgl_skrg=date("d");
						  $bln_skrg=date("n");
						  $thn_skrg=date("Y");
						  echo buatkalender($tgl_skrg,$bln_skrg,$thn_skrg); 
						  ?>
					</div>
				</div>
			</div>
			<br>
			<section class="box">
			</section>
			<br>
			<div id="footerwrap"> 
			<div class="container">
				<h4> <a style="color: #1E90FF; "href="http://www.gmail.com">Copyright by</a> SIOWISJA</h4>
			</div>
		</div>


  </body>
</html>




