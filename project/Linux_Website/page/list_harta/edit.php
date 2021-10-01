<?php 
	session_start();
		include ('../../php/connect.php');
		$cek=$_SESSION['user'];
		include ('../body_part/query_body.php');
		$ambil = $_GET['id_harta'];
		$sql_harta = "SELECT * FROM harta where id_harta = $ambil";
		$query_harta = mysqli_query($conn, $sql_harta);
		if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>De-Knappe - Remedial Online System</title>
		<link rel="stylesheet" type="text/css" href="/De_Knappe/css/template.css">
		<link rel="stylesheet" type="text/css" href="/De_Knappe/css/add.css">
        <link rel="stylesheet" type="text/css" href="/De_Knappe/css/font/flaticon.css">
		<link rel="icon" href="/De_Knappe/images/logo.png">
	</head>
	<body>
		<header>
			<ul class="navbar">
			  <li><a href="../../php/logout.php">Keluar<i class="flaticon-close"></i></a></li>
			  <li><a href="../profil.php"><?php echo $data['nama']; ?><i class="flaticon-user-3"></i></a></li>
			</ul>
		</header>
		<?php require_once('../body_part/sidebar_edit.php') ?>
		<div class="content">	
			<div class="gambar">
			</div>
			<div class="isijudul">
			UBAH HARTA
			</div>
			<div class="isi">
           
			<form action="" method="POST" enctype="multipart/form-data">
				<table class="form">
                <?php

                while ($r_harta = mysqli_fetch_array($query_harta)) {
                ?>
                    <tr>
                        <td><span>ID_HARTA</span></td>
                        <td><input type="text" name="id_harta" required value="<?php echo $r_harta['id_harta'] ?>" disabled></td>            
                    </tr>
                    <tr>
                        <td><span>JENIS HARTA</span></td>
                        <td><input type="text" name="jenis" required value="<?php echo $r_harta['jenis'] ?>"></td>            
                    </tr>
                    <tr>
                        <td><span>JUMLAH HARTA</span></td>
                        <td><input type="text" name="jumlah" required value="<?php echo $r_harta['jumlah'] ?>"></td>            
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" class="tombol" name="upload" value="UBAH HARTA">
							<?php
							if(isset($_POST['upload'])) {
							$jenis = $_POST['jenis'];
							$jumlah = $_POST['jumlah'];

							$sql_update_harta = "UPDATE harta SET jenis='$jenis', jumlah='$jumlah' where id_harta ='$ambil'";
							$update_harta = $conn->query($sql_update_harta);
								if($update_harta) {
									echo 'harta Berhasil di Ubah';
								} else {
									echo 'Gagal ubah harta!';
								}
							}
							?>						
						</td>
                    </tr>
				</table>
                <?php
                }
                ?>				
				</form>
			</div>
		</div>
		<footer>
			<div class="footer">
			Copyright &copy; De-Knappe [ Remedial Online Sistem ] 2017<br> 
			All rights reserved Telkom University - D3 Teknik Informatika<br>
			</div>
		</footer>
	</body>
</html>
<?php
}
	else
	{
  		header("location: ../login_guru.php");
	}
?>