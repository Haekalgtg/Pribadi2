<?php
session_start();
include '../koneksi.php';
include '../config/midtrans.php';

if (!isset($_SESSION['id'])) {
    die('User belum login');
}

$id_user = $_SESSION['id'];
$total = 2000;


// simpan pesanan
mysqli_query($koneksi, "
INSERT INTO pesanan (id_user, tanggal_pesan, status, total_harga)
VALUES ($id_user, NOW(), 'menunggu', $total)
");

$id_pesanan = mysqli_insert_id($koneksi);

// simpan detail
mysqli_query($koneksi, "
INSERT INTO pesanan_detail (id_pesanan, id_menu, jumlah, subtotal)
VALUES ($id_pesanan, 1, 1, $total)
");

// midtrans
$params = [
  'transaction_details' => [
    'order_id' => 'ORDER-' . $id_pesanan,
    'gross_amount' => $total
  ]
];

$snapToken = \Midtrans\Snap::getSnapToken($params);
?>

<!DOCTYPE html>
<html>
<head>
<title>Pembayaran</title>
<script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="kode client key midtrans"></script>
</head>
<body>

<h2>Total: Rp <?= number_format($total) ?></h2>

<button onclick="bayar()">Bayar dengan DANA</button>

<script>
function bayar() {
  snap.pay("<?= $snapToken ?>");
}
</script>

</body>
</html>
