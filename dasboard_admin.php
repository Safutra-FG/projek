<?php
$namaAkun = "Admin";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin - Thraz Computer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 font-sans">

  <div class="flex h-screen">

    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-md flex flex-col justify-between">
      <div>
        <!-- Logo dan Nama -->
        <div class="flex flex-col items-center py-6 border-b border-gray-300">
          <img src="icon/logo.png" alt="Logo" class="w-12 h-12 rounded-full mb-2">
          <h1 class="text-lg font-bold text-blue-500 text-center">Thraz Computer</h1>
        </div>

        <!-- Menu -->
        <ul class="mt-6 px-6 space-y-4 text-gray-700">
          <li class="flex items-center space-x-2 hover:text-blue-500 cursor-pointer">
            <a href="data_pelanggan.php" class="flex items-center space-x-2">
              <span>👤</span>
              <span>Data Pelanggan</span>
            </a>
          </li>
          <li class="flex items-center space-x-2 hover:text-blue-500 cursor-pointer">
            <span>💳</span>
            <span>Riwayat Transaksi</span>
          </li>
          <li class="flex items-center space-x-2 hover:text-blue-500 cursor-pointer">
            <span>📦</span>
            <span>Stok Gudang</span>
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
          <!-- Notifikasi -->
          <button class="text-xl hover:text-blue-500 cursor-pointer" title="Pemberitahuan">
            🔔
          </button>
          <!-- Nama Akun -->
          <div class="flex items-center space-x-2">
            <span class="text-sm">👤</span>
            <span class="text-sm font-medium"></span>
          </div>
        </div>
      </div>

      <!-- Konten -->
      <div class="flex-1 flex items-center justify-center">
        <h1 class="text-2xl font-semibold">Selamat Datang Admin</h1>
      </div>

    </div>
  </div>

</body>
</html>
