<?php
if ($_POST) {
    $saldoAwal = $_POST['saldoAwal'];
    $bunga = $_POST['bunga'];
    $bulan = $_POST['bulan'];
    $saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);
}
?>

<form method="post">
    Saldo Awal: <input type="text" name="saldoAwal"><br><br>
    Bunga per Bulan: <input type="text" name="bunga"><br><br>
    Lama Bulan: <input type="text" name="bulan"><br><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

<?php if ($_POST): ?>
Saldo akhir setelah <?php echo $bulan ?> bulan adalah : Rp. <?php echo $saldoAkhir ?>,-
<?php endif; ?>