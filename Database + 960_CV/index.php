<?php
    include ('db/conn.php'); 
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curiculum Vitae</title>
	
	<link href="css/960.css" rel="stylesheet" />
	<link href="css/text.css" rel="stylesheet" />
	<link href="css/reset.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	
</head>

<body>
	<?php
	$nama ="Handie Pramana Putra";
	
	$ttl ="Surabaya, 12 September 2000";
	$alamat1="Jl. Simorejo 102-A, Sukomanunggal";
	$alamat2="Surabaya. 60181";
	$notel="081332049634";
	$ig="saya_handie";
	
	$kuliah="UPN \"Veteran\" Jawa Timur";
	$sma="SMA Muhammadiyah 10 Surabaya";
	$smp="SMP Muhammadiyah 2 Surabaya";
	$sd="SD Negeri Asemrowo 1 Surabaya";
	?>
	
	
	<div class="wrapper">
		<div class="box">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	
	
	<div class="container_16">	
		<div class="grid_8 push_1">
		<img class="fotoku" src="images/fotoku.JPG" alt="Foto Handie" style="border-radius: 100%;width: 250px;height: 250px"/>
		</div>
		
		<div class="grid_8 push_1">
			<div class="namaq">
		<h1>Handie</h1>
		<h1>Pramana</h1>
		<h1>Putra</h1>
		<h4>Informatics Students</h4>
			</div>
		</div>
		
		<div class="clear"></div>
		
		<div class="grid_8">
		<div class="label">	
			<table>
				<tr>
					<td><img class="bio" id="bio" src="images/person-black-user-shape.png" alt="Icon Bio"</td>
					<td><h2>Profil</h2></td>
				</tr>
			</table>
			</div>
			<div class="push_1 macrotop">
				<?php
                    $q_profil = "SELECT * FROM profil";
                    $h_profil = mysqli_query(connection(), $q_profil);
                 ?>
			<table class="space_profile">
				<?php while ($data_profil = mysqli_fetch_array($h_profil)) : ?>
				<tr>
					<td><img class="lahir" id="lahir" src="images/location.png" alt="Icon Kelahiran"/></td>
					<td><?php echo $data_profil['ttl']; ?></td>
				</tr>
				<tr>
					<td><img class="rumah" id="rumah" src="images/home.png" alt="Icon Rumah"/></td>
					<td><?php echo $data_profil['alamat']; ?></td>
				</tr>
				<tr>
					<td><img class="hp" id="hp" src="images/phone-call.png" alt="Icon HP"/></td>
					<td><?php echo $data_profil['no_tel']; ?></td>
				</tr>
				<tr>
					<td><img class="instagram" id="instagram" src="images/instagram.png" alt="Icon IG"/></td>
					<td><?php echo $data_profil['ig']; ?></td>
				</tr>
				<?php endwhile ?>
			</table>
			</div>
			<br>
		</div>
		
		<div class="grid_8">
		<div class="label">
			<table>
				<tr>
					<td><img class="skill" id="skill" src="images/configuration-gears.png" alt="Icon Skill"</td>
					<td><h2>Critical Skills</h2></td>
				</tr>
			</table>
		</div>
			<div class="macrotop-skill">
			<table cellpadding="10">
				<tr>
					<td><p align="center"><img class="icon-skill" id="icon-skill" src="images/happy-face.png" alt="happy face"</p></td>
					<td><p align="center"><img class="icon-skill" id="icon-skill" src="images/mind-map.png" alt="happy face"</p></td>
					<td><p align="center"><img class="icon-skill" id="icon-skill" src="images/happiness.png" alt="happy face"</p></td>
					<td><p align="center"><img class="icon-skill" id="icon-skill" src="images/critical-thinking.png" alt="happy face"</p></td>
					<td><p align="center"><img class="icon-skill" id="icon-skill" src="images/idea.png" alt="happy face"</p></td>
					<td><p align="center"><img class="icon-skill" id="icon-skill" src="images/knowledge.png" alt="happy face"</p></td>
				</tr>
				<tr>
					<td><p align="center">Mental<br>Eleasticity</p></td>
					<td><p align="center">Complex<br>Problem<br>Solving</p></td>
					<td><p align="center">People<br>Skills</p></td>
					<td><p align="center">Critical<br>Thinking</p></td>
					<td><p align="center">Creativity</p></td>
					<td><p align="center">Inter<br>Disciplinary<br>Knowledge</p></td>
				</tr>
			</table>
			</div>
		</div>
			
		<div class="clear"></div>
		
		<div class="grid_8">
		<div class="label">
			<table>
				<tr>
					<td><img class="edu" id="edu" src="images/mortarboard.png" alt="Icon Edu" </td>
					<td><h2>Riwayat Pendidikan</h2></td>
				</tr>
			</table>
		</div>
			<div class="push_1 macrotop">
			<table>
				<tr>
					<td><h3>• 2018 - Sekarang</h3></td>	
				</tr>
				<tr>
					<td><?php echo $kuliah ?></td>
				</tr>
				<tr>
					<td><h3>• 2015 - 2018</h3></td>
				</tr>
				<tr>
					<td><?php echo $sma ?></td>
				</tr>
				<tr>
					<td><h3>• 2012 - 2015</h3></td>
				</tr>
				<tr>
					<td><?php echo $smp ?></td>
				</tr>
				<tr>
					<td><h3>• 2007 - 2012</h3></td>
				</tr>
				<tr>
					<td><?php echo $sd ?></td>
				</tr>
			</table>
			</div>
		</div>
		
		<div class="grid_8">
		<div class="label">
			<table>
				<tr>
					<td><img class="org" id="org" src="images/organization.png" alt="Icon Org" </td>
					<td><h2>Riwayat Organisasi</h2></td>
				</tr>
			</table>
		</div>
			<div class="push_1 macrotop">
			<table>
				<tr>
					<td><h3>• 2019 - 2021</h3></td>
				</tr>
				<tr>
					<td>
					<p>Pimpinan Daerah<br>Ikatan Pelajar Muhammadiyah<br>Kota Surabaya</p>
					</td>
				</tr>
				<tr>
					<td><h3>• 2018 - 2019</h3></td>
				</tr>
				<tr>
					<td>
					<p>Ketua Divisi Mobile UKM E-Sport<br>UPN "Veteran" Jawa Timur</p>
					</td>
				</tr>
				<tr>
					<td><h3>• 2017 - 2019</h3></td>
				</tr>
				<tr>
					<td>
					<p>Ketua Bidang Perkaderan Pimpinan Cabang<br>Ikatan Pelajar Muhammadiyah<br>Sawahan Kota Surabaya</p>
					</td>
				</tr>
				<tr>
					<td><h3>• 2016 - 2018</h3></td>
				</tr>
				<tr>
					<td>
						<p>Forum Anak Kota Surabaya</p>
					</td>
				</tr>
				<tr>
					<td><h3>• 2016 - 2017</h3></td>
				</tr>
				<tr>
					<td>
					<p>Sekertaris Umum Pimpinan Ranting<br>Ikatan Pelajar Muhammadiyah<br>SMA Muhammadiyah 10 Surabaya</p>
					</td>
				</tr>
				<tr>
					<td><h3>• 2015 - 2016</h3></td>
				</tr>
				<tr>
					<td>
						<p>Anggota ASBO Pimpinan Ranting<br>Ikatan Pelajar Muhammadiyah<br>SMA Muhammadiyah 10 Surabaya</p>
					</td>
				</tr>
			</table>
			</div>
		</div>
		
		<div class="clear"></div>
		<div class="grid_8 pend-pres">
		<div class="label">
		<table>
			<tr>
				<td><img class="tropy" id="tropy" src="images/trophy-shape.png" alt="Icon Tropy"</td>
				<td><h2>Prestasi</h2></td>
			</tr>	
		</table>
		</div>
			<div class="push_1 macrotop">
			<table>
				<tr>
					<td><h3>• 2017</h3></td>
				</tr>
				<tr>
					<td><p>First Place Zetizen School Campaign</p></td>
				</tr>
				<tr>
					<td><h3>• 2017</h3></td>
				</tr>
				<tr>
					<td><p>Best Practice Agenda Aksi Jihad Literasi<br>Pimpinan Pusat IPM</p></td>
				</tr>
				<tr>
					<td><h3>• 2017</h3></td>
				</tr>
				<tr>
					<td><p>First Place Zetizen School</p></td>
				</tr>
			</table>
			</div>
		</div>
		
		<div class="prefix_1"></div>
		
		<div class="grid_16 push_4">
		<div class="label">
		<table>
			<tr>
				<td><img class="quote" id="quote" src="images/left-quote.png" alt="Icon Quote"</td>
				<td><h2>Motto</h2></td>
			</tr>	
		</table>
		</div>
			<div class="push_1 motto">
				<h3>"Berfikir, Bertuhan, Berkarya"</h3>
			</div>
		</div>
		
		
	</div>
	</div>
</body>
</html>