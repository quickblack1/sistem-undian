	<?php
		

      include("header.php");
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
 	<form action ="prosesmasuk.php" method="POST">
 		<table class="table2">
 			<tr>
 				<th class="th0"> WELCOME</td>
 				<th class="th0"> LOGIN</td>
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



