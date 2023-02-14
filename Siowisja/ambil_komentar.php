<?php
session_start();
include 'koneksi2.php';
include 'csrf.php';
$output='';
 
$query = "SELECT * FROM tbl_komentar WHERE parent_komentar_id = '0' ORDER BY komentar_id DESC";
$dewan1 = $db1->prepare($query);
$dewan1->execute();
$res1 = $dewan1->get_result();
while ($row = $res1->fetch_assoc()) {
  $output .= '
    <div>
      <img src="image/fotouser.png" alt="foto-user" class="mr-3 mt-3 rounded-circle" style="width:40px;">
      <div class="media-body">
      <div class="row">
        <div>
          <h4><b>'.$row["nama_pengirim"] .'</b> <small> Posted on <i>'.$row["date"].'</i></small></h4>
          <p>'.$row["komentar"].'</p>
        </div>
        <div align="right">
          <button style="float :right; width: 100px;  height: auto; background: #29447E; border: 0; padding: 5px 10px; font-family: verdana; color: white; type="button" class="btn btn-primary reply" id="'.$row["komentar_id"].'">Reply</button>
        </div>
      </div>
      </div>
    </div>
  ';
  $output .= ambil_reply($db1, $row["komentar_id"]);
}
 
echo json_encode([$output]);
 
 
function ambil_reply($db1, $parent_id = 0, $marginleft = 0){
  $output='';
  $query = "SELECT * FROM tbl_komentar WHERE parent_komentar_id=?";
  $dewan1 = $db1->prepare($query);
  $dewan1->bind_param("s", $parent_id);
  $dewan1->execute();
  $res1 = $dewan1->get_result();
 
  $count = $res1->num_rows;
  if($parent_id == 0) {
    $marginleft = 0;
  } else {
    $marginleft = $marginleft + 48;
  }
 
  $tingkat = $marginleft/48+1;
  
  if($count > 0){
    while ($row = $res1->fetch_assoc()) {
      $output .= '
        <div style="margin-left:'.$marginleft.'px">
          <img src="image/fotouser.png" alt="foto-user" class="mr-3 mt-3 rounded-circle" style="width:40px;">
          <div class="media-body">
          <div class="row">
            <div>
              <h4><b>'.$row["nama_pengirim"] .'</b> <small> Posted on <i>'.$row["date"].'</i></small></h4>
              <p>'.$row["komentar"].'</p>
            </div>';
 
        if($tingkat < 4){
          $output .= '
              <div align="right">
                <button style="float :right; width: 100px;  height: auto; background: #DEB887; border: 0; padding: 5px 10px; font-family: verdana; color: white;type="button" class="btn btn-primary reply" id="'.$row["komentar_id"].'">Reply</button>
              </div>';
        }
 
        $output .= '    
          </div>
          </div>
        </div>
      ';
      $output .= ambil_reply($db1, $row["komentar_id"], $marginleft);
    }
  }
 
  return $output;
}
?>