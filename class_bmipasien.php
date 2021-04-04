<?php
	class BmiPasien {
		public $nama,
			   $umur,
			   $jenis_kelamin,
			   $berat_badan,
			   $tinggi_badan;

		 function hasilBMI () {
			return "<b>Nama : $this->nama <br><br>
				  Berat badan : $this->berat <br><br>
				  Tinggi badan : $this->tinggi <br><br>
				  Umur : $this->umur <br><br>
				  Jenis kelamin : $this->jenisKelamin </b>";
		}
		 function statusBMI($BMI) {
			 if ($BMI < 18.5){
				 return "<td>Berat badan kurang.</td>";
			 }
			 else if ($BMI >= 18.5 && $BMI <= 24.9) {
				 return "<td>Berat badan ideal.</td>";
			 }
			 else if ($BMI >= 25.0 && $BMI <= 29.9) {
				 return "<td>Berat badan berlebih.</td>";
			 }
			 else {
				 return "<td>Kegemukan.</td>";
			 }
		 }
	}
	if (isset($_POST["nama_pasien"])) {
		$bmi = new BmiPasien;
		$bmi->nama = $_POST["nama_pasien"];
		$bmi->berat = $_POST["berat_pasien"];
		$bmi->tinggi = $_POST["tinggi_pasien"];
		$bmi->umur = $_POST["umur_pasien"];
		$bmi->jenisKelamin = $_POST["jenis_kelamin"];
	}
	$pasien1 = ['nama'=>'Ushiromiya Battler', 'kelamin'=>'Laki-Laki', 'umur'=>18, 'berat'=>60,'tinggi'=>180];
	$pasien2 = ['nama'=>'Ushiromiya Maria','kelamin'=>'Perempuan','umur'=>9, 'berat'=>25,'tinggi'=>100];
	$pasien3 = ['nama'=>'Ushiromiya Ange','kelamin'=>'Perempuan', 'umur'=>18,  'berat'=>45,'tinggi'=>170];
	$pasien4 = ['nama'=>'Bernkastel Frederica','kelamin'=>'Perempuan', 'umur'=>20,  'berat'=>50,'tinggi'=>155];
	$pasien5 = ['nama'=> $bmi->nama, 'kelamin'=> $bmi->jenisKelamin, 'umur'=>$bmi->umur, 'berat'=>$bmi->berat,'tinggi'=>$bmi->tinggi];

	$array_pasien = [$pasien1, $pasien2, $pasien3, $pasien4, $pasien5];
?>
	<!DOCTYPE html>
	<html lang="id">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<title>Daftar Pasien BMI</title>
	</head>
	<body>
		<div class="container text-center">
			<h2 class="text-center mb-5">Hasil Evaluasi BMI</h2>
			<?php
				echo "Nama : ".$pasien5['nama']."<br>";
				echo "Berat/Tinggi Badan : ".$pasien5['berat']."kg/".$pasien5['tinggi']."cm<br>";
				echo "Umur : ".$pasien5['umur']." Tahun<br>";
				$BMI = $pasien5["berat"]/(($pasien5["tinggi"]/100)**2);
				echo "BMI : ".number_format($BMI,5)."<br>";
				$status = new bmiPasien();
				echo "Hasil : ".$status->statusBMI($BMI)."<br>";
			?>
		</div>
		<br><br>
		<div class="container">
			<h2 class="text-center mb-5">Data BMI Pasien</h2>
			<table class="table table-hover table-striped table-success">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama Lengkap</th>
						<th scope="col">Gender</th>
						<th scope="col">Umur</th>
						<th scope="col">Berat (kg)</th>
						<th scope="col">Tinggi (cm)</th>
						<th scope="col">BMI</th>
						<th scope="col">Hasil</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$nomor = 1;
						foreach($array_pasien as $pasien) {
							echo '<tr><td>'.$nomor.'</td>';
							echo '<td>'.$pasien['nama'].'</td>';
							echo '<td>'.$pasien['kelamin'].'</td>';
							echo '<td>'.$pasien['umur'].'</td>';
							echo '<td>'.$pasien['berat'].'</td>';
							echo '<td>'.$pasien['tinggi'].'</td>';
							$BMI = $pasien["berat"] / (($pasien["tinggi"]/100)**2);
							echo '<td>'.number_format($BMI,1).'</td>';
							$status = new bmiPasien();
							echo $status->statusBMI($BMI);
							echo '</tr>';
							$nomor++;
						}
					?>
				</tbody>
			</table>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	</body>
	</html>