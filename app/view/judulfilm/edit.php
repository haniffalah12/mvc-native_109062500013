<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Film</title>
</head>
<body>
    <h2>Edit Film</h2>

    <form method="post" action="index.php?page=judulfilm&action=update">
        <input type="hidden" name="id" value="<?= $judulfilm['id'] ?>">

        <label>NIM</label><br>
        <input type="text" name="kode"
               value="<?= htmlspecialchars($judulfilm['kode']) ?>" required><br><br>

        <label>Nama</label><br>
        <input type="text" name="judul"
               value="<?= htmlspecialchars($judulfilm['judul']) ?>" required><br><br>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Film</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="navbar">Sistem Data Film</div>

    <div class="container">
        <div class="card card-narrow">
            <div class="page-header">
                <div>
                    <h2>Edit Film</h2>
                    <p class="subtitle">Ubah data lalu simpan perubahan.</p>
                </div>
            </div>

            <form method="post" action="index.php?page=judulfilm&action=update">
                <input type="hidden" name="id" value="<?= (int) $judulfilm['id'] ?>">

                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" id="kode" name="kode"
                           value="<?= htmlspecialchars($judulfilm['kode']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="judul">Judul Film</label>
                    <input type="text" id="judul" name="judul"
                           value="<?= htmlspecialchars($judulfilm['judul']) ?>" required>
                </div>

                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" id="penulis" name="penulis"
                           value="<?= htmlspecialchars($judulfilm['penulis']) ?>" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-secondary" href="index.php?page=judulfilm">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
        <label>Program Studi</label><br>
        <input type="text" name="penulis"
               value="<?= htmlspecialchars($judulfilm['penulis']) ?>" required><br><br>

        <button type="submit">Update</button>
        <a href="index.php?page=judulfilm">Kembali</a>
    </form>
</body>
</html>
