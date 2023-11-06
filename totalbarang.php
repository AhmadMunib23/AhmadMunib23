<?php
// Data barang dalam bentuk array multidimensi
$barang = [
    ["Produk" => "Minyak Telon", "Stok" => 30, "Harga" => 30000],
    ["Produk" => "Diapers", "Stok" => 20, "Harga" => 51000],
    ["Produk" => "Baby Oil", "Stok" => 10, "Harga" => 16000],
    ["Produk" => "Shampo Baby", "Stok" => 18, "Harga" => 20000],
    ["Produk" => "Bedak", "Stok" => 15, "Harga" => 15000],
    ["Produk" => "Baju Bayi", "Stok" => 20, "Harga" => 35500],
    ["Produk" => "Jumper", "Stok" => 25, "Harga" => 50000]
];

// Hitung total jumlah
$totalJumlah = 0;
foreach ($barang as $item) {
    $totalJumlah += $item["Stok"];
}

// Tanggal Transaksi
$tanggalTransaksi = "06 November 2023";

// Produk yang dibeli
$produkDibeli = [
    ["Produk" => "Baju Bayi", "Qty" => 1, "Harga" => 35500],
    ["Produk" => "Diapers", "Qty" => 3, "Harga" => 51000],
    ["Produk" => "Bedak", "Qty" => 1, "Harga" => 15000],
    ["Produk" => "Minyak Telon", "Qty" => 2, "Harga" => 30000]
];

// Hitung total pembelian
$totalPembelian = 0;
foreach ($produkDibeli as $item) {
    $totalPembelian += $item["Qty"] * $item["Harga"];
}

// Diskon berdasarkan total pembelian
$diskon = 0;
if ($totalPembelian >= 200000) {
    $diskon = 0.20; // 20%
} elseif ($totalPembelian >= 150000) {
    $diskon = 0.10; // 10%
}

// Hitung total pembayaran setelah diskon
$totalPembayaran = $totalPembelian - ($totalPembelian * $diskon);

// Tampilkan isi array barang dalam bentuk tabel
echo "<h2>Tabel Harga Barang</h2>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th></tr>";
foreach ($barang as $index => $item) {
    echo "<tr><td>" . ($index + 1) . "</td><td>" . $item["Produk"] . "</td><td>" . $item["Stok"] . "</td><td>" . $item["Harga"] . "</td></tr>";
}
echo "</table>";

// Tampilkan hasil perhitungan
echo "<h2>Hasil Perhitungan</h2>";
echo "Total Jumlah: " . $totalJumlah . "<br>";
echo "Tanggal Transaksi: " . $tanggalTransaksi . "<br>";
echo "Total Pembelian: " . $totalPembelian . "<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Total Pembayaran: " . $totalPembayaran . "<br>";
?>