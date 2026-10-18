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

        <label>Program Studi</label><br>
        <input type="text" name="penulis"
               value="<?= htmlspecialchars($judulfilm['penulis']) ?>" required><br><br>

        <button type="submit">Update</button>
        <a href="index.php?page=judulfilm">Kembali</a>
    </form>
</body>
</html>
