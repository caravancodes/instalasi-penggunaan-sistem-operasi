<?php
$severname = "localhost";
$user = "root";
$pass = "";
$db = "xeonranger";
$conn = mysqli_connect("$severname","$user","$pass","$db");
if (!$conn) {
    echo 'Database Tidak Ada';
}
?>