  <?php

    //connection
    require('confiq.php');
    include("header.php");


    if (isset($_POST['submit'])){

      //sql buat query
      $nokp=$_POST['nokp'];
      $namapengundi=$_POST['namapengundi'];
      $katalaluanpengundi=$_POST['katalaluanpengundi'];
      $jantina = $_POST['jantina'];
      $kelas = $_POST['kelas'];
      //$alert = "";

      $sql = "SELECT * FROM pengundi WHERE nokp = '$nokp'";
      $result= mysqli_query($con, $sql);
      $rowCount = mysqli_num_rows($result);

      if ($rowCount > 0){
      ?>
        <script>
          alert('Pendaftaran tidak berjaya. Nombor Kad Pengenalan telah wujud.');
          window.onload = function() {
            let input = document.getElementById('nokp');
            input.focus();
            
            // Letak cursor di hujung teks
            input.setSelectionRange(input.value.length, input.value.length);
          }
        </script>
      <?php
      } else {
        $query="INSERT INTO pengundi(nokp, namapengundi, katalaluanpengundi, jantina, kelas) VALUES('$nokp','$namapengundi','$katalaluanpengundi', '$jantina', '$kelas');";
        $result = mysqli_query($con,$query);

        if($result == 1){
          echo"<script>alert('Pendaftaran Anda Berjaya'); window.location.href='logmasuk.php'; </script>";
        } else {
          echo"<script>alert('Pendaftaran Tidak Berjaya.');</script>";
        }
      }
		}
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
<form onsubmit="return validateForm()" action="prosesdaftar.php" method="POST">
  <table class="table2">
    <tr class="">
      <th class="th0"> Selamat Datang</td>
      <th class="th0"> Pendaftaran Pengundi Baru</td>
    </tr>
    <tr>
      <td class="td0">
        <img src="imej/logo.png" title="logo" alt="logo" />
      </td>
      <td class="td0">
        <table>
          <tr>
            <td> No kad pengenalan </td>
            <td>
              <input type="text" name="nokp" id="nokp" placeholder="No kad pengenalan" required><br>
              <span class="span1">Contoh: 123456789012</span>
              <!-- <input name="nokp" id="nokp" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="<?php //echo isset($_POST['nokp']) ? htmlspecialchars($_POST['nokp']) : ''; ?>" type="text" placeholder='nokp tanpa -' required> -->
            </td>
          </tr>
          <tr>
            <td> Nama pengundi </td>
            <td><input name="namapengundi" id="namapengundi" type="text" oninput="this.value=this.value.replace(/[^A-Za-z\s]/g,'').toUpperCase();" value="<?php echo isset($_POST['namapengundi']) ? htmlspecialchars($_POST['namapengundi']) : ''; ?>" placeholder='Nama penuh' required></td>
          </tr>
          <tr>
            <td>Kata laluan</td>
            <td>
              <input id="password" name="katalaluanpengundi" type="password" placeholder='Kata laluan' required>
              <button class="button0" type="button" onclick="togglePass()">👁</button><br>
              <span id="error" class='span0'></span>
            </td>
          </tr>
          <tr>
            <td>Jantina</td>
            <td>
              <label>
                <input type="radio" name="jantina" value="L" <?php if (isset($_POST['jantina']) == 'L'){ echo 'checked'; } ?> required> Lelaki
              </label>

              <label>
                <input type="radio" name="jantina" value="P" <?php if (isset($_POST['jantina']) == 'P'){ echo 'checked'; } ?>> Perempuan
              </label>
            </td>
</tr>
          <tr>
            <td>Kelas</td>
            <td>
              <select name="kelas" id="kelas" required>
                <option value="">PILIH KELAS</option>
                <option value="5A" <?php if (isset($_POST['kelas']) == '5A'){ echo 'selected'; } ?> >5 ALPHA</option>
                <option value="5B" <?php if (isset($_POST['kelas']) == '5B'){ echo 'selected'; } ?> >5 BINARY</option>
                <option value="5C" <?php if (isset($_POST['kelas']) == '5C'){ echo 'selected'; } ?> >5 CYBER</option>
                <option value="5D" <?php if (isset($_POST['kelas']) == '5D'){ echo 'selected'; } ?> >5 DIGITAL</option>
                <option value="5E" <?php if (isset($_POST['kelas']) == '5E'){ echo 'selected'; } ?> >5 EVOLUTION</option>
                <option value="5F" <?php if (isset($_POST['kelas']) == '5F'){ echo 'selected'; } ?> >5 FUTURISTIC</option>
                <option value="5G" <?php if (isset($_POST['kelas']) == '5G'){ echo 'selected'; } ?> >5 GIGABYTE</option>
                <option value="5H" <?php if (isset($_POST['kelas']) == '5H'){ echo 'selected'; } ?> >5 HOLOGRAM</option>
                <option value="1A" <?php if (isset($_POST['kelas']) == '1A'){ echo 'selected'; } ?> >1 ALPHA</option>
              </select>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <button name="submit" type="submit">Daftar</button>
              <button type='reset'>Reset</button>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</form>
<div class="div3">
  <button onclick="window.location.href='index.php'">Kembali</button>
</div>

<?php
include("footer.php");
?>