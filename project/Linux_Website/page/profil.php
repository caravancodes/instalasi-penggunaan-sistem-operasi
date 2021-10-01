<?php 
	session_start();
		include ('../php/connect.php');
		$cek=$_SESSION['user'];
		include ('body_part/query_body.php');
		if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>De-Knappe - Remedial Online System</title>
		<link rel="stylesheet" type="text/css" href="/De_Knappe/css/template.css">
		<link rel="stylesheet" type="text/css" href="/De_Knappe/css/profil_guru.css">
		<link rel="stylesheet" type="text/css" href="/De_Knappe/css/font/flaticon.css">
		<link rel="icon" href="/De_Knappe/images/logo.png">
	</head>
	<body>
		<header>
			<ul class="navbar">
			  <li><a href="../php/logout.php">Keluar<i class="flaticon-close"></i></a></li>
			  <li><a href="profil.php"><?php echo $data['nama']; ?><i class="flaticon-user-3"></i></a></li>
			</ul>
		</header>
		<?php require_once('body_part/sidebar.php') ?>
		<div class="content">	
			<div class="gambar">
			</div>
			<div class="isijudul">
			PROFIL PIRATE
			</div>
			<div class="isi">
				<div class="profil_guru">
					<?php echo'<img src="../images/foto/'.$data['foto_profil'].'">'?>
					<div class="underfoto">
						<?php echo $data['nama']; ?>
					</div>
					<table class="table">
						<tr>
							<td>Nama</td>
							<td>: <?php echo $data['nama']; ?></td>
						</tr>
						<tr>
							<td>NIP</td>
							<td>: <?php echo $data['id_profil']; ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>: <?php echo $data['alamat']; ?></td>
						</tr>
						<tr>
							<td>Tempat,Tanggal Lahir</td>
							<td>: <?php echo $data['tempat_lahir']; ?></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>: <?php echo $data['gender']; ?></td>
						</tr>
						<tr>
							<td>No. Telepon</td>
							<td>: <?php echo $data['no_telp']; ?></td>
						</tr>
					</table>
					<div class="edit">
						<a>PIRATES</a>
					</div>
				</div>
				<div class="penjelasan">
					<table>
						<tr>
							<th>Harta</th>
							<td>Menu ini berisi List harta karun Bajak Laut</td>
						</tr>
					</table>
				</div>
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
  		header("location: ../login.php");
	}
?>