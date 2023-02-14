<?php
require 'koneksi_rate.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $wisata = $_POST["wisata"];

    $sql = "INSERT INTO rating (name,wisata,rate) VALUES ('$name','$wisata','$rating')";
    if (mysqli_query($conn, $sql))
    {
        echo "<script>alert('Data berhasil disimpan'); </script>";
       // echo"<script language='javascript'>window.location = 'detail.php'</script>";

    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>