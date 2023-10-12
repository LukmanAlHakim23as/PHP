<?php
class LibraryModel {
    private $books = [];

    public function addBook($title, $author) {
        $book = $title . ' oleh ' . $author;
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }
}
?>
