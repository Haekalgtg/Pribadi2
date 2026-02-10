<?php
require_once __DIR__ . '/../midtrans/midtrans.php';

\Midtrans\Config::$serverKey = 'kode server key midtrans';
\Midtrans\Config::$isProduction = false;
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;
