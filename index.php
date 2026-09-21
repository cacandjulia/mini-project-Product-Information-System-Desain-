<?php
// Presentation Layer: Merajut komponen data dan logika
require_once 'products.php';
require_once 'functions.php';

$totalAset = hitungTotalNilaiStok($products);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Data Informasi Produk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        .total-box { margin-top: 20px; padding: 15px; background-color: #e2f0d9; border: 1px solid #b2d8b2; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Sistem Informasi Produk Gudang</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga (Rp)</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $item): ?>
                <tr <?= CekWarnaStok($item['stok']); ?>>
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['kategori']; ?></td>
                    <td><?= number_format($item['harga'], 0, ',', '.'); ?></td>
                    <td><?= $item['stok']; ?></td>
                    <td><?= $item['deskripsi']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="total-box">
        Total Nilai Aset Gudang: Rp <?= number_format($totalAset, 0, ',', '.'); ?>
    </div>

</body>
</html>
