<?php
session_start();
require 'config.php'; // koneksi ke database

$error = '';

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    if ($password !== $confirm) {
        $error = "Kata sandi tidak cocok!";
    } else {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        // Cek apakah username sudah digunakan
        $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
        if (mysqli_num_rows($check) > 0) {
            $error = "Username sudah terdaftar!";
        } else {
            $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed')";
            if (mysqli_query($conn, $query)) {
                // Login otomatis setelah register
                $_SESSION['username'] = $username;
                $_SESSION['role'] = 'customer'; // default role
                header("Location: index.php");
                exit;
            } else {
                $error = "Gagal membuat akun!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun - Thar'z Computer</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border: 2px solid #0c1c4b;
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 90%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #0c1c4b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h3>Buat Akun Baru</h3>
    <form method="POST">
        <input type="text" name="username" placeholder="Masukkan Username" required><br>
        <input type="email" name="email" placeholder="nama@gmail.com" required><br>
        <input type="password" name="password" placeholder="Kata Sandi" required><br>
        <input type="password" name="confirm" placeholder="Ulang Kata Sandi" required><br>
        <button type="submit" name="register">Regist</button>
    </form>

    <?php if ($error): ?>
        <div class="message"><?= $error ?></div>
    <?php endif; ?>
</div>

</body>
</html>
