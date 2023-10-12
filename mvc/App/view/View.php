<?php
class LibraryView {
    public function showBooks($books) {
        echo "Daftar Buku di Perpustakaan:<br>";
        foreach ($books as $book) {
            echo $book . '<br>';
        }
    }

    public function showMessage($message) {
        echo $message . '<br>';
    }
}
?>
