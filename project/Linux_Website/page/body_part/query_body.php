<?php
    $sql = "SELECT * from profil where id_profil='$cek'";
    $qry = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($qry);
?>