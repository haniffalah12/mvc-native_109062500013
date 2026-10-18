<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Film</title>
</head>
<body>
    <h2>Tambah Film</h2>

    <form method="post" action="index.php?page=judulfilm&action=store">
        <label>Kode</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Judul Film</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Penulis</label><br>
        <input type="text" name="prodi" required><br><br>

        <button type="submit">Simpan</button>
        <a href="index.php?page=judulfilm">Kembali</a>
    </form>
</body>
</html>
