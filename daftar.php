  <?php
    //connection
    require('confiq.php');

    if (isset($_POST['submit'])){
      
      

      //sql buat query
      $nokp=$_POST['nokp'];
      $namapengundi=$_POST['namapengundi'];
      $katalaluanpengundi=$_POST['katalaluanpengundi'];
      $kelas = $_POST['kelas'];
      //$alert = "";

      $query="INSERT INTO pengundi(nokp,namapengundi,katalaluanpengundi, kelas) VALUES('$nokp','$namapengundi','$katalaluanpengundi', '$kelas');";
      $result = mysqli_query($con,$query);
          //run query
          if($result == 1){
              echo"<script>alert('Pendaftaran Anda Berjaya'); window.location.href='logmasuk.php'; </script>";
          } else {
              echo"<script>alert('Nombor Kad Pengenalan telah wujud'); window.location.href='daftar.php'; </script>";
          }

      //tutup connection
      mysqli_close($con);

      /* if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d).{8,}$/', $katalaluanpengundi)) {
          ?>
          <script>
              document.getElementById('password').focus();
          </script>
          <?php
          $alert = "Kata laluan mesti sekurang-kurangnya 8 aksara serta gabungan huruf, simbol dan nombor!";
      } else {
          $query="INSERT INTO pengundi(nokp,namapengundi,katalaluanpengundi, kelas) VALUES('$nokp','$namapengundi','$katalaluanpengundi', '$kelas');";
          //run query
          if(mysqli_query($con,$query)){
              echo"<script>alert('Pendaftaran Anda Berjaya'); window.location.href='logmasuk.php'; </script>";
          } else {
              echo"<script>alert('Nombor Kad Pengenalan telah wujud'); window.location.href='daftar.php'; </script>";
          } 
      } */
		}
    
    include("header.php");
  ?>

<script>
function validateForm() {
    let pass = document.getElementById("password").value;
    let error = document.getElementById("error");

    // reset error
    error.innerText = "";

    // 1. semak panjang
    if (pass.length < 8) {
        error.innerText = "Kata laluan mesti sekurang-kurangnya 8 aksara.";
        document.getElementById("password").focus();
        return false;
    }

    // 2. semak huruf
    if (!/[A-Za-z]/.test(pass)) {
        error.innerText = "Kata laluan mesti ada huruf.";
        document.getElementById("password").focus();
        return false;
    }

    // 3. semak nombor
    if (!/[0-9]/.test(pass)) {
        error.innerText = "Kata laluan mesti ada nombor";
        document.getElementById("password").focus();
        return false;
    }

    // 4. semak simbol
    if (!/[^A-Za-z0-9]/.test(pass)) {
        error.innerText = "Kata laluan mesti ada simbol.";
        document.getElementById("password").focus();
        return false;
    }
    return true;
}

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
  <form onsubmit="return validateForm()" action="" method="POST">
    <center>
  <table border ="0">
  <tr>
  <td style="background-color: pink;"align="center"> Welcome</td>
  <td style="background-color: red;"align="center"> Pendaftaran Pengundi Baru</td>
  </tr>
  <tr><td><center>
  <img src="imej/logo.png" width="300" height="125" title="logo" alt="logo" /></td>
  <td width="60%">
  <table>
  </tr>
  <tr>
  <td style="background-color: orange;"align="center"> No kad pengenalan </td>
  <td><input name="nokp" size="15" type="text" placeholder='nokp tanpa -' required></td>
  </tr>
  <tr>
    <td style="background-color: orange;"align="center"> Nama pengundi </td>
    <td><input name="namapengundi" size="15" type="text" placeholder='nama penuh' required></td>
  </tr>

            
    </select> 
</td></tr>

  
 
  <tr>
    <td style="background-color: orange;"align="center">Kata laluan</td>
    <td>
      <input id="password" name="katalaluanpengundi" size="15" type="password" placeholder='kata laluan' required>
      <button class="button0" type="button" onclick="togglePass()">👁</button><br>
      <span id="error" class='span0'></span>
    </td>
  </tr>
  <tr>
    <td style="background-color: orange;"align="center">Kelas</td>
    <td>
      <select name="kelas" id="kelas" required>
        <option value="">PILIH KELAS</option>
        <option value="5A">5 ALPHA</option>
        <option value="5B">5 BINARY</option>
        <option value="5C">5 CYBER</option>
        <option value="5D">5 DIGITAL</option>
        <option value="5E">5 EVOLUTION</option>
        <option value="5F">5 FUTURISTIC</option>
        <option value="5G">5 GIGABYTE</option>
        <option value="5H">5 HOLOGRAM</option>
      </select>
    </td>
  </tr>
  
  <tr>
    <td>
      
    </td>
    <td>
      <button name="submit" type="submit">Daftar</button>
      <button type='reset'>Reset</button>
    </td>
  </tr>
  </table>
  </td>
  </tr><tr>
  <td><button onclick="window.location.href='index.php'">Kembali</button></td>
 </table>
 <center>
 
 
</form>
</body>
</html>