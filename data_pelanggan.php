<?php
$namaAkun = "Admin";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Pelanggan - Thraz Computer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 font-sans">

  <div class="flex h-screen">

    <!-- Sidebar -->
    <div class="w-64 bg-white shadow-md flex flex-col justify-between">
      <div>
        <!-- Logo -->
        <div class="flex flex-col items-center py-6 border-b border-gray-300">
          <img src="icon/logo.png" alt="Logo" class="w-12 h-12 rounded-full mb-2">
          <h1 class="text-lg font-bold text-blue-500 text-center">Thraz Computer</h1>
        </div>

        <!-- Menu -->
        <ul class="mt-6 px-6 space-y-4 text-gray-700">
          <li class="flex items-center space-x-2 text-blue-500 font-semibold">
            <span>👤</span>
            <span>Data Pelanggan</span>
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

      <!-- Footer -->
      <div class="p-4 border-t border-gray-300 text-center text-sm text-gray-500">
        © 2025
      </div>
    </div>

    <!-- Konten Utama -->
    <div class="flex-1 flex flex-col">
      
      <!-- Header -->
      <div class="flex justify-between items-center p-4 border-b border-gray-300 bg-white shadow-sm">
        <div>
          <input type="text" placeholder="🔍 Search..." class="px-3 py-1 border rounded-md text-sm w-64 bg-gray-100 focus:outline-none">
        </div>
        <div class="flex items-center space-x-4 text-gray-700">
          <button class="text-xl hover:text-blue-500" title="Notifikasi">🔔</button>
          <div class="flex items-center space-x-2">
            <span>👤</span>
            <span class="text-sm font-medium"><?php echo $namaAkun; ?></span>
          </div>
        </div>
      </div>

      <!-- Tabel dan Tombol -->
      <div class="flex-1 p-6 overflow-auto">

        <!-- Tombol Kembali -->
        <div class="mb-4">
          <a href="dasboard_admin.php" class="text-blue-600 hover:underline text-sm">&larr; Kembali ke Dashboard</a>
        </div>

        <!-- Tabel Kosong -->
        <table class="w-full text-sm border border-gray-300">
          <thead class="bg-gray-200 text-gray-700">
            <tr>
              <th class="border px-3 py-2">ID Pesanan</th>
              <th class="border px-3 py-2">Nama</th>
              <th class="border px-3 py-2">Tanggal</th>
              <th class="border px-3 py-2">Nomor HP</th>
              <th class="border px-3 py-2">Email</th>
              <th class="border px-3 py-2">Status</th>
            </tr>
          </thead>
          <tbody class="bg-white text-center text-gray-500">
            <tr>
              <td colspan="6" class="py-4">Belum ada data pelanggan</td>
            </tr>
          </tbody>
        </table>

        <!-- Tombol CRUD -->
        <div class="mt-4 space-x-2">
          <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Create</button>
          <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View</button>
          <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</button>
          <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
