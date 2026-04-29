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
 				<img src="imej/logo.png" width="280" height="200" title="logo" alt="logo" /></td>

 				<td width="50%">
 					<table>
 					</tr>
 					<td>Nombor Kad Pengenalan</td>
 					<td><input name="nokp" size="12" type="text"></td>
 					
 				</tr>
 				<tr>
 				<td>Katalaluan</td>
 				<td> <input name= "katalaluanpengundi" size="15" type="password"></td>
 				</tr>
 				<tr>
 					<td><input name="submit" value="Login" type="submit" style="background-color:black;color:white;width:150px;
height:40px;"></td>
<td> <input type='reset' value='Padam' style="background-color:black;color:white;width:150px;
height:40px;"></td>

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



