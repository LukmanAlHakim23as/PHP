<?php
class LibraryController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function addBook($title, $author) {
        $this->model->addBook($title, $author);
        $this->view->showMessage("Buku telah ditambahkan ke perpustakaan.");
    }

    public function listBooks() {
        $books = $this->model->getBooks();
        $this->view->showBooks($books);
    }
}
?>
