<html>
<head>
<style type="text/css">
	
/* Table */
.demo-table {
    border-collapse: collapse;
    font-size: 13px;
    font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
}
.demo-table th, 
.demo-table td {
    border: 1px solid #e1edff;
    padding: 7px 17px;
}
.demo-table .title {
    caption-side: bottom;
    margin-top: 12px;
}

/* Table Header */
.demo-table thead th {
    background-color: #3193e4;
    color: #FFFFFF;
    border-color: #3b98e4 !important;
    text-transform: uppercase;
}

/* Table Body */
.demo-table tbody td {
    color: #353535;
}
.demo-table tbody td:first-child,
.demo-table tbody td:last-child,
.demo-table tbody td:nth-child(4) {
    text-align: left;
}
.demo-table tbody tr:nth-child(odd) td {
    background-color: #f4fbff;
}
.demo-table tbody tr:hover td {
    background-color: #ffffa2;
    border-color: #ffff0f;
    transition: all .2s;
}

/* Table Footer */
.demo-table tfoot th {
    background-color: #e5f5ff;
}
.demo-table tfoot th:first-child {
    text-align: left;
}
.demo-table tbody td:empty
{
    background-color: #ffcccc;
}

	</style>
</head>
<body>

		<section class="text-gambar textgambar gambar6">
			<div class="container">
			<br/>
			<br/>
				<p><h2 style="color:white; background-color: #29447E;"><marquee>WISATA KOTA JAMBI</marquee></h2></p>
				<hr>
				<p style="text-align : center; ">SIOWISJA siap membantu Anda mencari wisata di Jambi</p>
			</div><!-- container -->
		</section><!-- section -->
		</br>
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
	
<form action="wisata.php" method="get">
       <label>Pencarian :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">

</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];

	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

 <table class= demo-table>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Informasi</th>
		<th>Gambar</th>
	</tr>
<br><br>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_wisata where judul like '%".$cari."%'");		
	}else{
		$data = mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_wisata");	
			
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['judul']; ?></td>
		<td><?php echo $d['isi']; ?></td>
		<td><?php echo "<img border=2 src='admin/admin/wisata/foto/$d[gambar]' border=0 width=100 height=100 "?></td>
	</tr>

	<?php } ?>
</table>

