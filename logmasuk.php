	<?php
	//connection
		require('confiq.php');
      	include("header.php");

		if (isset($_POST['submit'])){
			
			$nokp = $_POST['nokp'];
			$katalaluanpengundi = $_POST['katalaluanpengundi'];

			$rekod=mysqli_query($con, "Select * from pengundi where nokp='$nokp' and katalaluanpengundi='$katalaluanpengundi'");
			$hasil=mysqli_num_rows($rekod);
			if ($hasil>0)
			{
				$_SESSION['nokp'] = $nokp;
				$row = mysqli_fetch_array($rekod);
				$_SESSION['namapengundi'] = $row['namapengundi'];
				$message = "Katalaluan anda sah";
				echo "<script type='text/javascript'>alert('$message');</script>";
				
				header('Location: index.php');
			} 
			else
			{
				$message1 = "Katalaluan anda tidak sah";
				echo "<script type='text/javascript'>alert('$message1');</script>";
				
				header('logmasuk.php');
				
			}
		}
    ?>
	<script>
		function togglePass() {
			let pass = document.getElementById("password");

			if (pass.type === "password") {
				pass.type = "text";
			} else {
				pass.type = "password";
			}
		}
	</script>
 	<br>
 	<form action ="" method="POST">
 		<table class="table2">
 			<tr>
 				<th class="th0">Selamat Datang</td>
 				<th class="th0">Log Masuk</td>
 			</tr>
 			<tr>
 				<td class="td0">
 					<img src="imej/login-user.png" width="" height="" title="logo" alt="logo" />
				</td>
 				<td class="td0">
 					<table class="">
 						<tr>
 							<td>Nombor Kad Pengenalan</td>
 							<td><input name="nokp" type="text"></td>
 						</tr>
						<tr>
							<td>Kata laluan</td>
							<td>
								<input id="password" name= "katalaluanpengundi" type="password">
								<button class="button0" type="button" onclick="togglePass()">👁</button><br>
							</td>
 						</tr>
 						<tr>
 							<td></td>
							<td>
								<button name="submit" value="Login" type="submit">Login</button>
								<button type='reset'>Reset</button>
							</td>
						</tr>
						<tr>
							<td><a href="daftar.php">Daftar pengguna Baru</a></td>
							<td><a href="index.php">Laman Utama</a></td>
 						</tr>
 					</table>
 				</td>
 			</tr>
 		</table>
	</form>
<?php
include("footer.php");
?>



