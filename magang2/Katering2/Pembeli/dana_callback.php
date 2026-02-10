<?php
include '../koneksi.php';

$json = file_get_contents("php://input");
$data = json_decode($json, true);

if (!$data) exit;

$order_id = $data['order_id'];
$status   = $data['transaction_status'];

$id = str_replace('ORDER-', '', $order_id);

if ($status == 'settlement') {
    mysqli_query($koneksi, "
      UPDATE pesanan SET status='diproses' WHERE id=$id
    ");
}
elseif ($status == 'expire' || $status == 'cancel') {
    mysqli_query($koneksi, "
      UPDATE pesanan SET status='dibatalkan' WHERE id=$id
    ");
}
