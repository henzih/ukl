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
<section id="layanan" class="layanan">
            <div class="container">
                <h2>Layanan KTP</h2>
                <div class="layanan-grid">
                    <div class="layanan-item">
                        <h3>Pendaftaran KTP Baru</h3>
                        <p>Layanan untuk penduduk yang belum memiliki KTP</p>
                    </div>
                    <div class="layanan-item">
                        <h3>Perpanjangan KTP</h3>
                        <p>Perpanjang masa berlaku KTP Anda</p>
                    </div>
                    <div class="layanan-item">
                        <h3>Perubahan Data</h3>
                        <p>Update informasi pada KTP</p>
                    </div>
                    <div class="layanan-item">
                        <h3>Penggantian KTP</h3>
                        <p>Ganti KTP yang hilang atau rusak</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="prosedur" class="prosedur">
            <div class="container">
                <h2>Prosedur Pengurusan KTP</h2>
                <div class="prosedur-steps">
                    <div class="step">
                        <h3>1. Siapkan Dokumen</h3>
                        <p>Kumpulkan dokumen persyaratan</p>
                    </div>
                    <div class="step">
                        <h3>2. Isi Formulir</h3>
                        <p>Lengkapi formulir pendaftaran</p>
                    </div>
                    <div class="step">
                        <h3>3. Verifikasi</h3>
                        <p>Proses pengecekan dokumen</p>
                    </div>
                    <div class="step">
                        <h3>4. Pengambilan KTP</h3>
                        <p>Terima KTP jadi</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="pendaftaran" class="pendaftaran">
            <div class="container">
                <h2>Formulir Pendaftaran</h2>
                <form>
                    <input type="text" placeholder="Nama Lengkap" required><br>
                    <input type="text" placeholder="NIK" required><br>
                    <input type="text" placeholder="Tempat Lahir" required><br>
                    <input type="date" placeholder="Tanggal Lahir" required><br>
                    <select required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select><br>       
                    <form method="post" enctype="multipart/form-data">
                        <label for="file">Pilih gambar untuk diupload:</label><br>
                        <input type="file" name="file" id="file" accept="image/*" required>
                    </form>
                    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        echo "File adalah gambar - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    if ($_FILES["file"]["size"] > 5000000) {
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "File ". htmlspecialchars(basename($_FILES["file"]["name"])) . " telah diupload.";
        } else {
            echo "Maaf, terjadi kesalahan saat mengupload file.";
        }
    }
}
?>
                    <textarea placeholder="Alamat Lengkap" required></textarea><br>
                    <button type="submit" class="btn">Kirim Pendaftaran</button>
                </form>
            </div>
        </section>
        <footer>
        <div class="container">
            <p>&copy; 2023 Sistem Administrasi KTP. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>