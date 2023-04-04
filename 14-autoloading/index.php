<?php
    require_once("./App/Produk/Init.php");

    $produk1 = new Buku("Bahasa Inggris Pemula", "Udin", "Mangga Edu", 50000, 100);
    $produk2 = new Video("Course Belajar PHP", "Galih", "Galih Course", 250000, 50);

    $daftarProduk = new Printer();
    $daftarProduk->tambahProduk($produk1);
    $daftarProduk->tambahProduk($produk2);
    echo $daftarProduk->printDaftarProduk();