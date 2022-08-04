<?php

require_once("koneksi.php");

$id = $_GET["idhapus"];

$sql = "DELETE FROM t_obat WHERE kode_obat=".$id;



if (mysqli_query($conn, $sql)) {

   // echo "Record deleted successfully";

    header("location:display.php",true,301);

    exit();

} else {

  echo "Error deleting record: " . mysqli_error($conn);

}



mysqli_close($conn);

?>