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
 		<center>
 		<table class="table3">
 			<tr>
 				<th> WELCOME</td>
 				<th> LOGIN</td>
 			</tr>
 			<tr>
 				<td>
 				<img src="imej/login-user.png" width="" height="" title="logo" alt="logo" /></td>

 				<td>
 					<table class="table4">
 					</tr>
 					<td>Nombor Kad Pengenalan</td>
 					<td><input name="nokp" size="12" type="text"></td>
 					
 				</tr>
 				<tr>
 				<td>Kata laluan</td>
 				<td>
					<input id="password" name= "katalaluanpengundi" size="15" type="password">
					<button class="button0" type="button" onclick="togglePass()">👁</button><br>
				</td>
 				</tr>
 				<tr>
 					<td></td>
<td>
	<button name="submit" value="Login" type="submit">Login</button>
	<button type='reset'>Reset</button>
</td>

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



