<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Film</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="navbar">Sistem Data Film</div>

    <div class="container">
        <div class="card card-narrow">
            <div class="page-header">
                <div>
                    <h2>Tambah Film</h2>
                    <p class="subtitle">Isi seluruh data di bawah ini.</p>
                </div>
            </div>

            <form method="post" action="index.php?page=judulfilm&action=store">
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" id="kode" name="kode" placeholder="Contoh: F001" required>
                </div>

                <div class="form-group">
                    <label for="judul">Judul Film</label>
                    <input type="text" id="judul" name="judul" placeholder="Judul film" required>
                </div>

                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" id="penulis" name="penulis" placeholder="Nama penulis" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-secondary" href="index.php?page=judulfilm">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>