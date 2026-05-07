	<?php
      include_once("header.php");
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
  <br>
 	<form action ="prosesmasukadmin.php" method="POST">
 		
 		<table class="table3">
 			<tr>
 				<th> Selamat Datang</td>
 				<th> Log Masuk</td>
 			</tr>
 			<tr>
 				<td>
 				<img src="imej/login-admin.png" width="" height="" title="logo" alt="logo" /></td>

 				<td>
 					<table class="table4">
 					</tr>
 					<td>ID ADMIN</td>
 					<td><input name="idadmin" size="12" type="text"></td>
 					
 				</tr>
 				<tr>
 				<td>KATA LALUAN</td>
 				<td>
					<input id="password" name="katalaluanadmin" size="15" type="password">
					<button class="button0" type="button" onclick="togglePass()">👁</button>
				</td>
 				</tr>
 				<tr>
 					<td></td>
	<td>
		<button name="submit" type="submit">Login</button>
		<button type='reset'>Reset</button>
	</td>

<tr>

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