<?php
    require_once("./App/init.php");
    use App\Produk\SayHello as SayHello;

    $produk1 = new App\Produk\Buku("Bahasa Inggris Pemula", "Udin", "Mangga Edu", 50000, 100);
    $produk2 = new App\Produk\Video("Course Belajar PHP", "Galih", "Galih Course", 250000, 50);

    $daftarProduk = new App\Produk\Printer();
    $daftarProduk->tambahProduk($produk1);
    $daftarProduk->tambahProduk($produk2);
    echo $daftarProduk->printDaftarProduk();

    echo "<br>";
    echo "<br>";

    new SayHello();
    echo "<br>";
    new App\Services\SayHello();