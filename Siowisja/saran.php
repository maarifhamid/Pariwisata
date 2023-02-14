 </div>
		   
		  </div>
		  
		</div>
		
	  </div>

</div>
		
		<section class="bagian-gambar textgambar gambar8">
			<div class="container">
			<h1> <h2 style="color:#fff000;">KLIK UNTUK SARAN</h2></h1>
			<span class="icon icon-envelop"></span> <a href="https://www.gmail.com/"> siowisja@gmail.com</a> <br/>
			<br/>
			<br/>
			<br/>
				<p style="color: white; font-family: sans-serif; font: bold;">BEAUTIFUL JAMBI</p>
				<hr>
				<p style="color: white; font-family: sans-serif; font: bold;">SIOWISJA siap membantu Anda mencari wisata di Jambi</p>
			</div><!-- container -->
		</section><!-- section -->
		
		<?php
//Mengirimkan Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<head>

	<!-- Csrf Token -->
<meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">

	
</head>

<body>
 
<div class="container">
	<h2 align="center" style="margin: 60px 10px 10px 10px;">Komentar Anda tentang web kami</h2><hr>
	<form method="POST" id="form_komen">

		<div class="form-group">
			<input style="width: 100%; "type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" placeholder="Masukkan Nama" />
		</div>
		<br>
		<div class="form-group">
			<textarea style="width: 100%; "name="komen" id="komen" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="komentar_id" id="komentar_id" value="0" />
			
			<button style="float :left; width: 100px;  height: auto; background: #29447E; border: 0; padding: 5px 10px; font-family: verdana; border-radius: 20px; color: white; " type="reset">Batal</button>

    <button style="float :left; width: 100px;  height: auto; background: #29447E; border: 0; padding: 5px 10px; font-family: verdana; border-radius: 20px; color: white; "type="submit">Simpan</button>


<br><br>
		</div>
	</form>
	<hr>
	<h4 class="mb-3">Komentar :</h4>
	<span id="message"></span>
   
   	<div id="display_comment"></div>
</div>
 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<script>
		$(document).ready(function(){
			//Mengirimkan Token Keamanan
			$.ajaxSetup({
	            headers : {
	                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
	            }
	        });
        
			$('#form_komen').on('submit', function(event){
				event.preventDefault();
				let nama_pengirim = $('#nama_pengirim').val();
				let komen = $('#komen').val();
				
				if(nama_pengirim==''){
				    alert("Nama Pengirim Harus disii");
				} else if(komen==''){
				    alert("Komentar Harus disii");
				} else {
    				var form_data = $(this).serialize();
    				$.ajax({
    					url:"tambah_komentar.php",
    					method:"POST",
    					data:form_data,
    					success:function(data){
    						$('#form_komen')[0].reset();
    						$('#komentar_id').val('0');
    						load_comment();
    					}, error: function(data) {
    		            	console.log(data.responseText)
    		            }
    				})
				}
			});
 
			load_comment();
 
			function load_comment(){
				$.ajax({
					url:"ambil_komentar.php",
					method:"POST",
					success:function(data){
						$('#display_comment').html(data);
					}, error: function(data) {
		            	console.log(data.responseText)
		            }
				})
			}
 
			$(document).on('click', '.reply', function(){
				var komentar_id = $(this).attr("id");
				$('#komentar_id').val(komentar_id);
				$('#nama_pengirim').focus();
			});
		});
	</script>

</body>

		