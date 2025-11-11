<form method="get">
    Nama Lengkap: <input type="text" name="nama"><br><br>
    
    Tempat Lahir: <input type="text" name="tempat_lahir"><br><br>
    
    Tanggal Lahir:<br>
    Tanggal: 
    <select name="tgl">
        <?php for ($i = 1; $i <= 31; $i++) echo "<option value='$i'>$i</option>"; ?>
    </select>
    Bulan: 
    <select name="bln">
        <?php for ($i = 1; $i <= 12; $i++) echo "<option value='$i'>$i</option>"; ?>
    </select>
    Tahun: 
    <select name="thn">
        <?php for ($i = 1980; $i <= 2005; $i++) echo "<option value='$i'>$i</option>"; ?>
    </select><br><br>
    
    Alamat Rumah:<br>
    <textarea name="alamat"></textarea><br><br>
    
    Jenis Kelamin:<br>
    <input type="radio" name="jk" value="pria"> Pria
    <input type="radio" name="jk" value="wanita"> Wanita<br><br>
    
    Asal Sekolah: <input type="text" name="asal_sekolah"><br><br>
    
    Nilai UAN: <input type="text" name="nilai_uan"><br><br>
    
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

<?php
if ($_GET) {
    $nama = $_GET['nama'];
    $tempat_lahir = $_GET['tempat_lahir'];
    $tgl = $_GET['tgl'];
    $bln = $_GET['bln'];
    $thn = $_GET['thn'];
    $alamat = $_GET['alamat'];
    $jk = $_GET['jk'];
    $asal_sekolah = $_GET['asal_sekolah'];
    $nilai_uan = $_GET['nilai_uan'];

    echo "Terimakasih " . $nama . " sudah mengisi form pendaftaran.<br>";
    echo "Nama Lengkap : " . $nama . "<br>";
    echo "Tempat Lahir : " . $tempat_lahir . "<br>";
    echo "Tanggal Lahir : " . $tgl . "-" . $bln . "-" . $thn . "<br>";
    echo "Alamat Rumah : " . $alamat . "<br>";
    echo "Jenis Kelamin : " . ($jk == "pria" ? "Pria" : "Wanita") . "<br>";
    echo "Asal Sekolah : " . $asal_sekolah . "<br>";
    echo "Nilai UAN : " . $nilai_uan . "<br>";
}
?>