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
                    <input type="text" placeholder="masukan foto anda" required><br>
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