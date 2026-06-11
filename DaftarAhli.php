<?php
    $errNamaAhli = $errNoAHli = $errEmailAhli = " ";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["NamaAhli"]))
            $errNamaAhli = "Sila Masukkan Nama";
        else
            $errNamaAhli = " ";
        //memeriksa kandungan medan NoAhli

        //memeriksa kandungan medan Email
        if (empty($_POST["EMAIL"]))
            $errEmailAhli = "Sila Masukkan Email";
        else
        {
            $Email = $_POST["EMAIL"];
            if (!filter_var($Email, FILTER_VALIDATE_EMAIL))
                $errEmailAhli = "Email tidak mengikut format";
            else
                $errEmailAhli = " ";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Ahli</title>
    </head>
    <body>
        <h3 style="text-align: center;">DAFTAR MAKLUMAT AHLI BARU</h3>
        <form action="" method="post">
            <table style="margin-left: auto; margin-right: auto;">
                <tr>
                    <th style="text-align: left;">No Ahli *</th>
                    <td><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Nama Ahli *</th>
                    <td>
                        <input type="text" name="NamaAhli" id="" size="50"><br>
                        <?php echo $errNamaAhli; ?>
                    </td>
                </tr>
                <tr>
                    <th style="text-align: left;">Jantina</th>
                    <td><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <th style="text-align: left;">No Telefon</th>
                    <td><input type="text" name="" id="" size="35"></td>
                </tr>
                <tr>
                    <th style="text-align: left;">Email *</th>
                    <td>
                        <input type="text" name="EMAIL" id="" size="50"><br>
                        <?php echo $errEmailAhli; ?>
                    </td>
                </tr>
                <tr>
                    <th>* Wajib diisi</th>
                    <td style="text-align: center;"><button type="submit" >DAFTAR</button></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>


