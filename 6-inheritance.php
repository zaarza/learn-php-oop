<?php
/*  A special method in a class that run after an instance from class created
*/

class Product {
    public function __construct(
        $judul = "Judul Produk / Game", 
        $penulis = "Penulis", 
        $penerbit = "Penerbit", 
        $harga = 0, 
        $durasi = 0 ) {

        $this->judul = $judul;
        $this->durasi = $durasi;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }
    
    public $judul, $penulis, $penerbit, $harga, $durasi;

    public function getLabel() {
        return "$this->judul, $this->penerbit";
    }

    public function getDetailProduct() {
        return "$this->judul | $this->penulis, $this->penerbit (Rp. $this->harga)";
    }
};

class Printer {
    public function PrintData( Product $product ) {
        $data = "Name: $product->name, Description: $product->description, Brand: $product->brand";
        return $data;
    }
}

class Buku extends Product {
    public function getDetailProduct() {
        return "Buku: $this->judul | $this->penulis, $this->penerbit (Rp. $this->harga) - $this->durasi Halaman";
    }
}

class Video extends Product {
    public function getDetailProduct() {
        return "Video: $this->judul | $this->penulis, $this->penerbit (Rp. $this->harga) ~ $this->durasi Jam";
    }
}

$buku = new Buku("Bahasa Inggris Pemula", "Udin", "Mangga", 50000, 100);
$video = new Video("Course Belajar PHP", "Galih", "Galih Edu", 250000, 50);

echo($buku->getDetailProduct());
echo "<br>";
echo "<br>";
echo($video->getDetailProduct());

// Buku : Bahasa Inggris Pemula | Udin, Mangga (Rp. 50000) - 100 Halaman
// Video : Course Belajar PHP | Galih, Galih Edu (Rp. 250000) ~ 50 Jam