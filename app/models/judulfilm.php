<?php
class judulfilm
{
    public function __construct(private PDO $db) {}

    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT id, kode, judul, penulis FROM judulfilm ORDER BY judul'
        );
        return $stmt->fetchAll();
    }

    public function findById(int $id): array|false
    {
        $stmt = $this->db->prepare(
            'SELECT id, kode, judul, penulis FROM judulfilm WHERE id = :id'
        );
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function insert(array $data): bool
    {
        $sql = 'INSERT INTO judulfilm (kode, judul, penulis)
                VALUES (:kode, :judul, :penulis)';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':kode'   => $data['kode'],
            ':judul'  => $data['judul'],
            ':penulis' => $data['penulis']
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $sql = 'UPDATE judulfilm
                SET kode = :kode, judul = :judul, penulis = :penulis
                WHERE id = :id';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':id'    => $id,
            ':kode'   => $data['kode'],
            ':judul'  => $data['judul'],
            ':penulis' => $data['penulis']
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare(
            'DELETE FROM judulfilm WHERE id = :id'
        );
        return $stmt->execute([':id' => $id]);
    }
}
?>
