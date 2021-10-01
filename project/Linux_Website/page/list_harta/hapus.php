<?php
include('../../php/connect.php');
$ambil = $_GET['id_harta'];
$sql = "DELETE FROM harta WHERE id_harta = $ambil";
$query = mysqli_query($conn, $sql);
if ($query) {
    header ('location:../harta.php');
}
?>