	<?php
		

      include("header.php");
    ?>
 	  <br>
  <br>
 	<form action ="prosesmasuk.php" method="POST">
 		<center>
 		<table border ="1">
 			<tr>
 				<td style="background-color: pink;"align="center"> WELCOME</td>
 				<td style="background-color: lightyellow;"align="center"> LOGIN</td>
 			</tr>
 			<tr>
 				<td>
 				<img src="imej/login-user.png" width="" height="" title="logo" alt="logo" /></td>

 				<td>
 					<table>
 					</tr>
 					<td>Nombor Kad Pengenalan</td>
 					<td><input name="nokp" size="12" type="text"></td>
 					
 				</tr>
 				<tr>
 				<td>Kata laluan</td>
 				<td> <input name= "katalaluanpengundi" size="15" type="password"></td>
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
</body>
</html>



