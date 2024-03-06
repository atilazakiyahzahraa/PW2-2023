<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftaran</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1.</td> 
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
				    <td>2.</td> 
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>
                <tr>
				    <td>3.</td> 
					<td>Atila</td>
					<td>atila@gmail.com</td>
					<td>Bogor</td>
					<td>+6281234567890</td>
				</tr>
                <tr>
				    <td>4.</td> 
					<td>Jamal</td>
					<td>jamal@gmail.com</td>
					<td>Jakarta</td>
					<td>+6289876543210</td>
				</tr>
                <tr>
				    <td>5.</td> 
					<td>Zakiyah</td>
					<td>zaki@gmail.com</td>
					<td>Bandung</td>
					<td>+6282112211221</td>
				</tr>
                <tr>
				    <td>6.</td> 
					<td>Wonu</td>
					<td>everywonu@gmail.com</td>
					<td>Jogja</td>
					<td>+6281221122112</td>
				</tr>
				<tr>
				
						
				<?php
				
				  if (isset($_POST['submit'])) {
					
                    $nama = $_POST['namalengkap'];
                    $email = $_POST['email'];
                    $almt = $_POST['alamat'];
                    $nohp = $_POST['nohp'];
                    $btn = $_POST['submit'];

                    echo "<tr>";
					echo "<td>7.</td>";
					echo "<td>$nama</td>";
                    echo "<td>$email</td>";
                    echo "<td>$almt</td>";
                    echo "<td>$nohp</td>";
                    echo "<td>$btn</td>";
					echo "</tr>";
					
                  }
				  
				  
				?>
				
			</tbody>
		</table>
	</div>
</body>
</html>