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
		<link rel="stylesheet" type="text/css" href="/De_Knappe/css/view_guru.css">
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
			LIST HARTA
			</div>
			<div class="isi">
				<div class="info-pilihan">
					<span>INFO PENTING</span>
					<ul>
						<li>Pirates Dapat Menambahkan Harta</li>
						<li>Pirates Dapat Mengubah Harta</li>
						<li>Pirates Dapat Menghapus Harta</li>
					</ul>
				</div>
				<div class="insert-data">
					<a href="list_harta/tambah.php">Tambah Harta</a><span>Klik ini untuk menambah Harta Pirates</span>
				</div>
				<div class="yeezy">				
					<table class="list">
						<tr>
							<th>NO.</th>
							<th>ID_HARTA</th>
							<th>JENIS HARTA</th>
							<th>JUMLAH</th>
							<th colspan="2">ACTION</th>
						</tr>
						<?php
						$index = $data['id_profil'];
						$no=1;
						$sql_harta = "SELECT * FROM harta";
						$qry_harta = mysqli_query($conn, $sql_harta);
						while ($t_harta = mysqli_fetch_array($qry_harta)) {
							echo'
							<tr>
							<td>'.$no++.'.</td>
							<td>'.$t_harta['id_harta'].'</td>
							<td>'.$t_harta['jenis'].'</td>
							<td>'.$t_harta['jumlah'].'</td>
							<td class="edit"><a href="list_harta/edit.php?id_harta='.$t_harta['id_harta'].'"><i class="flaticon-edit"></i></a></td>
							<td class="hapus"><a href="list_harta/hapus.php?id_harta='.$t_harta['id_harta'].'"><i class="flaticon-garbage"></i></a></td>
							</tr>
							';
						}
						?>
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
  		header("location: ../index.php");
	}
?>