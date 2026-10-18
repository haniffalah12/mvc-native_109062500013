<?php
require '../config/database.php';
require '../app/models/judulfilm.php';
require '../app/controllers/judulfilmcontroller.php';

$db = (new Database())->connect();
$model = new judulfilm($db);
$controller = new judulfilmcontroller($model);

$page   = $_GET['page'] ?? 'judulfilm';
$action = $_GET['action'] ?? 'index';

if ($page !== 'judulfilm') {
    http_response_code(404);
    exit('Halaman tidak ditemukan.');
}

match ($action) {
    'index'  => $controller->index(),
    'create' => $controller->create(),
    'store'  => $controller->store(),
    'edit'   => $controller->edit(),
    'update' => $controller->update(),
    'delete' => $controller->delete(),
    default  => (function () {
        http_response_code(404);
        exit('Action tidak ditemukan.');
    })()
};
?>
