<?php
require '../App/models/Model.php';
require '../App/view/View.php';
require '../App/controllers/Controller.php';

$model = new LibraryModel();
$view = new LibraryView();
$controller = new LibraryController($model, $view);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $controller->addBook($title, $author);
    }
}

$controller->listBooks();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Studi Kasus Perpustakaan</title>
</head>
<body>
    <h1>Perpustakaan</h1>
    <form method="post">
        <label for="title">Judul Buku:</label>
        <input type="text" name="title" required>
        <label for="author">Penulis:</label>
        <input type="text" name="author" required>
        <button type="submit" name="add">Tambah Buku</button>
    </form>
</body>
</html>
