<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Judul Film</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="navbar">Sistem Data Film</div>

    <div class="container">
        <div class="card">
            <div class="page-header">
                <div>
                    <h2>Daftar Film</h2>
                    <p class="subtitle">
                        Total <span class="badge"><?= count($judulfilm) ?> data</span>
                    </p>
                </div>
                <a class="btn btn-primary" href="index.php?page=judulfilm&action=create">+ Tambah Data</a>
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($judulfilm)): ?>
                        <tr>
                            <td colspan="4" class="empty">Belum ada data film.</td>
                        </tr>
                        <?php endif; ?>

                        <?php foreach ($judulfilm as $j): ?>
                        <tr>
                            <td><?= htmlspecialchars($j['kode']) ?></td>
                            <td>
                                <div class="name-cell">
                                    <span class="avatar"><?= htmlspecialchars(mb_strtoupper(mb_substr($j['judul'], 0, 1))) ?></span>
                                    <?= htmlspecialchars($j['judul']) ?>
                                </div>
                            </td>
                            <td><?= htmlspecialchars($j['penulis']) ?></td>
                            <td class="col-aksi">
                                <a class="btn btn-edit"
                                   href="index.php?page=judulfilm&action=edit&id=<?= (int) $j['id'] ?>">Edit</a>
                                <form method="post"
                                      class="inline-form"
                                      action="index.php?page=judulfilm&action=delete"
                                      onsubmit="return confirm('Hapus data ini?')">
                                    <input type="hidden" name="id" value="<?= (int) $j['id'] ?>">
                                    <button type="submit" class="btn btn-delete">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>