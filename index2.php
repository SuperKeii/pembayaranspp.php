<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran SPP</title>
</head>
<body>
    <h1>Pembayaran SPP</h1>
    
    <?php
    // Data siswa
    $namaSiswa = "John Doe";
    $kelas = "XII A";
    $jumlahSPP = 1000000; // Jumlah SPP dalam rupiah

    // Data pembayaran
    $bulanPembayaran = "Agustus";
    $tahunPembayaran = 2023;
    $jumlahBayar = 1000000; // Jumlah pembayaran dalam rupiah
    
    // Hitung sisa pembayaran
    $sisaPembayaran = $jumlahSPP - $jumlahBayar;
    ?>

    <h2>Detail Pembayaran</h2>
    <p>Nama Siswa: <?php echo $namaSiswa; ?></p>
    <p>Kelas: <?php echo $kelas; ?></p>
    <p>Bulan Pembayaran: <?php echo $bulanPembayaran; ?></p>
    <p>Tahun Pembayaran: <?php echo $tahunPembayaran; ?></p>
    <p>Jumlah Bayar: Rp <?php echo number_format($jumlahBayar, 0, ',', '.'); ?></p>
    <p>Sisa Pembayaran: Rp <?php echo number_format($sisaPembayaran, 0, ',', '.'); ?></p>

    <?php
    if ($sisaPembayaran <= 0) {
        echo "<p>Selamat! Pembayaran SPP telah lunas.</p>";
    } else {
        echo "<p>Silakan melakukan pembayaran sebesar Rp " . number_format($sisaPembayaran, 0, ',', '.') . " untuk melunasi SPP.</p>";
    }
    ?>
</body>
</html>
