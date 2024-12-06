<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Administrasi KTP</title>
    <link rel="stylesheet" href="ukl.css">
</head>
<body>
<header>
        <div class="container">
            <div class="logo">
                <h1>Sistem Administrasi KTP</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="home.php">Beranda</a></li>
                    <li><a href="isi.php">Pendaftaran</a></li>
                    <li><a href="about.php">Kontak</a></li>
                    <li><a href="cs.php">Customer Service</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="daftar.php">daftar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h2>Berikan Keluhan</h2>
        <form  method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <button type="submit">Kirim</button>
    <div>
    <footer>
        <div class="container">
            <p>&copy; 2023 Sistem Administrasi KTP. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>