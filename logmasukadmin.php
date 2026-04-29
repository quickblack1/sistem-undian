	<?php
      include_once("header.php");
    ?>
  <br>
  <br>
 	<form action ="prosesmasukadmin.php" method="POST">
 		<center>
 		<table border ="1">
 			<tr>
 				<td style="background-color: yellow;"align="center"> Selamat Datang</td>
 				<td style="background-color: red;"align="center"> Log Masuk</td>
 			</tr>
 			<tr>
 				<td>
 				<img src="imej/logo.jpeg" width="280" height="200" title="logo" alt="logo" /></td>

 				<td width="50%">
 					<table>
 					</tr>
 					<td>ID ADMIN</td>
 					<td><input name="idadmin" size="12" type="text"></td>
 					
 				</tr>
 				<tr>
 				<td>KATALALUAN</td>
 				<td> <input name= "katalaluanadmin" size="15" type="password"></td>
 				</tr>
 				<tr>
 					<td><input name="submit" value="Login" type="submit" style="background-color:black;color:white;width:150px;
height:40px;"></td>
<td> <input type='reset' value='Padam' style="background-color:black;color:white;width:150px;
height:40px;"></td>

<tr>

<td><a href="index.php">Laman Utama</a></td>
 					


 				</tr>
 			</table>
 		</td>
 	</tr>
 </table>
</form>
</body>
</html>



