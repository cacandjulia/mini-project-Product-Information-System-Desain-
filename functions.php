<?php
// Processing Layer: Fungsi hitung total nilai aset gudang
function hitungTotalNilaiStok($products) {
    $total = 0;
    foreach ($products as $product) {
        $total += $product['harga'] * $product['stok'];
    }
    return $total;
}

// Fungsi menentukan warna baris tabel (stok < 3 diberi warna merah/kritis)
function CekWarnaStok($stok) {
    if ($stok < 3) {
        return "style='background-color: #ffcccc; color: #990000;'"; // Merah muda untuk stok kritis
    }
    return "";
}
?>
