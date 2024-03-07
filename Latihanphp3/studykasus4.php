<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$total_harga = 0;

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 123,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 20,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 132,
    ],
  
];

foreach ($barang as $item) {
  $total_harga_item = $item['harga_barang'] * $item['jumlah_beli'];
  $total_harga += $total_harga_item;
}

echo "Total Harga Yang Harus Dibayar Adalah Rp. " . number_format($total_harga, 2, ',', '.');

    ?>
</body>
</html>