<?php

require_once("koneksi.php");

$id = $_GET["hapus"];

$sql = "DELETE FROM t_dokter WHERE kode_dokter=".$id;



if (mysqli_query($conn, $sql)) {

   // echo "Record deleted successfully";

    header("location:display.php");

    exit();

} else {

  echo "Error deleting record: " . mysqli_error($conn);

}



mysqli_close($conn);

?>