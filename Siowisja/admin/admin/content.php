<?php
  @$page = $_GET['page'];

  if ($page == "home") {
    include "home.php";
	
  }elseif ($page == "wisata") {
    include "wisata/wisata.php";
  }elseif ($page == "edit_wisata") {
    include "wisata/edit_wisata.php";
  }elseif ($page == "proses_wisata") {
    include "wisata/proses_wisata.php";
  }elseif ($page == "input_wisata") {
    include "wisata/input_wisata.php";
  }elseif ($page == "update_wisata") {
    include "wisata/update_wisata.php";
  }elseif ($page == "hapus_wisata") {
    include "wisata/hapus_wisata.php";
	
  }elseif ($page == "rekomendasi") {
    include "rekomendasi/rekomendasi.php";
  }elseif ($page == "edit_rekomendasi") {
    include "rekomendasi/edit_rekomendasi.php";
  }elseif ($page == "proses_rekomendasi") {
    include "rekomendasi/proses_rekomendasi.php";
  }elseif ($page == "input_rekomendasi") {
    include "rekomendasi/input_rekomendasi.php";
  }elseif ($page == "update_rekomendasi") {
    include "rekomendasi/update_rekomendasi.php";
  }elseif ($page == "hapus_rekomendasi") {
    include "rekomendasi/hapus_rekomendasi.php";
	
	
  }elseif ($page == "profil") {
    include "profil/profil.php";
  }elseif ($page == "edit_profil") {
    include "profil/edit_profil.php";
  }elseif ($page == "proses_profil") {
    include "profil/proses_profil.php";
  }elseif ($page == "input_profil") {
    include "profil/input_profil.php";
  }elseif ($page == "update_profil") {
    include "profil/update_profil.php";
  }elseif ($page == "hapus_profil") {
    include "profil/hapus_profil.php";
	
	
  }elseif ($page == "rating") {
    include "rating/rating.php";
  }elseif ($page == "edit_rating") {
    include "rating/edit_rating.php";
  }elseif ($page == "proses_rating") {
    include "rating/proses_rating.php";
  }elseif ($page == "input_rating") {
    include "rating/input_rating.php";
  }elseif ($page == "update_rating") {
    include "rating/update_rating.php";
  }elseif ($page == "hapus_rating") {
    include "rating/hapus_rating.php";
	
  }else {
    include "home.php";
  }

?>
