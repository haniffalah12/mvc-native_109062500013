<?php
class judulfilmcontroller
{
    public function __construct(private judulfilm $model) {}

    public function index(): void
    {
        $judulfilm = $this->model->getAll();
        require __DIR__ . '/../views/judulfilm/index.php';
    }

    public function create(): void
    {
        require __DIR__ . '/../views/judulfilm/create.php';
    }

    public function store(): void
    {
        $data = $this->validateInput($_POST);
        $this->model->insert($data);
        header('Location: index.php?page=judulfilm');
        exit;
    }

    public function edit(): void
    {
        $id = (int) ($_GET['id'] ?? 0);
        $judulfilm = $this->model->findById($id);

        if (!$judulfilm) {
            http_response_code(404);
            exit('Data judulfilm tidak ditemukan.');
        }

        require __DIR__ . '/../views/judulfilm/edit.php';
    }

    public function update(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $data = $this->validateInput($_POST);
        $this->model->update($id, $data);
        header('Location: index.php?page=judulfilm');
        exit;
    }

    public function delete(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $this->model->delete($id);
        header('Location: index.php?page=judulfilm');
        exit;
    }

    private function validateInput(array $input): array
    {
        $data = [
            'kode'   => trim($input['kode'] ?? ''),
            'judul'  => trim($input['judul'] ?? ''),
            'penulis' => trim($input['penulis'] ?? '')
        ];

        if ($data['kode'] === '' || $data['judul'] === '' || $data['penulis'] === '') {
            exit('kode, judul, dan program studi wajib diisi.');
        }

        return $data;
    }
}
?>
