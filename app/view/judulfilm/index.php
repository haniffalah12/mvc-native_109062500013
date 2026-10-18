<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Judul Film</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="index.php?page=judulfilm&action=create">Tambah Data</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Kode</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($judulfilm as $j): ?>
        <tr>
            <td><?= htmlspecialchars($j['kode']) ?></td>
            <td><?= htmlspecialchars($j['judul']) ?></td>
            <td><?= htmlspecialchars($j['penulis']) ?></td>
            <td>
                <a href="index.php?page=judulfilm&action=edit&id=<?= $j['id'] ?>">Edit</a>
                <form method="post"
                      action="index.php?page=judulfilm&action=delete"
                      style="display:inline"
                      onsubmit="return confirm('Hapus data ini?')">
                    <input type="hidden" name="id" value="<?= $j['id'] ?>">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
