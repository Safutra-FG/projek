<?php
$namaAkun = "Admin";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Riwayat Transaksi - Thraz Computer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 font-sans">

  <div class="flex h-screen">

    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-md flex flex-col justify-between">
      <div>
        <!-- Logo & Nama -->
        <div class="flex items-center px-4 py-6 border-b border-gray-300 space-x-3">
          <img src="icon/logo.png" alt="Logo" class="w-10 h-10 rounded-full">
          <h1 class="text-lg font-bold text-blue-500">Thraz Computer</h1>
        </div>

        <!-- Menu -->
        <ul class="mt-6 px-6 space-y-4 text-gray-700">
          <li>
            <a href="data_pelanggan.php" class="flex items-center space-x-2 hover:text-blue-500">
              <span>👤</span><span>Data Pelanggan</span>
            </a>
          </li>
          <li>
            <a href="riwayat_transaksi.php" class="flex items-center space-x-2 text-blue-500 font-semibold">
              <span>💳</span><span>Riwayat Transaksi</span>
            </a>
          </li>
          <li>
           <li class="flex items-center space-x-2 hover:text-blue-500 cursor-pointer">
            <a href="stok_gudang.php" class="flex items-center space-x-2">
              <span>📦</span>
              <span>Stok Gudang</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Footer Sidebar -->
      <div class="p-4 border-t border-gray-300 text-center text-sm text-gray-500">
        © 2025
      </div>
    </div>

    <!-- Konten Utama -->
    <div class="flex-1 flex flex-col">
      
      <!-- Header -->
      <div class="flex justify-between items-center p-4 border-b border-gray-300 bg-white shadow-sm">
        <div></div>
        <div class="flex items-center space-x-4 text-gray-700">
          <button class="text-xl hover:text-blue-500" title="Notifikasi">🔔</button>
          <div class="flex items-center space-x-2">
            <span>👤</span>
            <span class="text-sm font-medium"><?php echo $namaAkun; ?></span>
          </div>
        </div>
      </div>

      <!-- Konten Riwayat Transaksi -->
      <div class="p-6 overflow-auto">

        <!-- Tombol Kembali -->
        <div class="mb-4">
          <a href="dasboard_admin.php" class="text-blue-600 hover:underline text-sm">&larr; Kembali ke Dashboard</a>
        </div>

        <!-- Filter Bulan -->
        <div class="mb-4 flex items-center space-x-4">
          <label for="bulan" class="text-sm font-medium">Riwayat Transaksi Bulan</label>
          <input type="month" id="bulan" name="bulan" class="px-3 py-1 border rounded-md text-sm bg-gray-100 focus:outline-none">
        </div>

       <!-- Tabel Riwayat Transaksi -->
        <div class="overflow-x-auto">
          <table class="w-full text-sm border border-gray-300">
            <thead class="bg-gray-200 text-gray-700">
              <tr>
                <th class="border px-3 py-2">ID Pesanan</th>
                <th class="border px-3 py-2">Nama</th>
                <th class="border px-3 py-2">Tanggal</th>
                <th class="border px-3 py-2">Jenis Transaksi</th>
                <th class="border px-3 py-2">Sparepart</th>
                <th class="border px-3 py-2">Garansi</th>
                <th class="border px-3 py-2">Total Harga</th>
              </tr>
            </thead>
            <tbody class="bg-white text-center text-gray-600">
              <!-- Contoh data kosong -->
              <tr>
                <td colspan="7" class="py-4">Belum ada riwayat transaksi bulan ini</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>