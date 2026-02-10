<?php
include 'koneksi.php';

$data = json_decode(file_get_contents('php://input'), true);

if ($data['transaction_status'] === 'settlement') {
    $id = str_replace('ORDER-', '', $data['order_id']);
    mysqli_query($koneksi, "
      UPDATE pesanan SET status='diproses' WHERE id=$id
    ");
}
