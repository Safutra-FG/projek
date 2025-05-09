<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Thar'z Computer</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
        margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: url('icons/logobaru2.png') no-repeat center center fixed;
      background-size: cover;
      color: white;
    }

    header {
      background-color:rgb(29, 95, 171);
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 30px;
    }

    .logo-container {
      display: flex;
      align-items: center;
    }

    .logo-container img {
      height: 40px;
      margin-right: 10px;
    }

    header h1 {
      font-size: 18px;
      margin: 0;
    }

    header nav a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-weight: bold;
    }

    main {
      text-align: center;
      padding: 60px 20px;
    }

    main h2 {
      font-size: 24px;
      color:rgb(29, 95, 171);
    }

    .menu-boxes {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin-top: 50px;
      flex-wrap: wrap;
    }

    .box {
      background-color: white;
      border: 2px solid #0c1c4b;
      border-radius: 10px;
      width: 180px;
      height: 180px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      color:rgb(29, 95, 171);
      font-weight: bold;
      box-shadow: 0 4px 8px rgb(29, 95, 171);
      transition: transform 0.2s;
    }

    .box:hover {
      transform: scale(1.05);
      background-color:rgb(255, 255, 255);
    }

    .box i {
      font-size: 48px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo-container">
      <img src="icons/logo.png" alt="Logo Thar'z">
      <h1>Thar'z computer</h1>
    </div>
    <nav>
      <a href="register.php">Buat Akun</a>
      <a href="login.php">Login</a>
    </nav>
  </header>

  <main>
    <h2>Selamat Datang<br>Di Website Thar'z Computer</h2>

    <div class="menu-boxes">
      <a href="service.php" class="box">
        <i class="fas fa-tools"></i>
        Service
      </a>
      <a href="tracking.php" class="box">
        <i class="fas fa-search-location"></i>
        Tracking
      </a>
      <a href="sparepart.php" class="box">
        <i class="fas fa-microchip"></i>
        Sparepart
      </a>
    </div>
  </main>
</body>
</html>
