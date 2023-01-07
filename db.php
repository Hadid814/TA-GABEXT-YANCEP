<?php

try {
    $conn = new mysqli('localhost', 'root', '', 'peminjaman_barang');
} catch (Exception $e) {
    echo $e->getMessage();
}