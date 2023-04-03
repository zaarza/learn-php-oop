<?php
// Public = can be accessed from instance
// Protected = can be acess from that class and their child
// Private = only in that class can access
class Product {
    public function __construct(
        $judul = "Judul", $penulis = "Penulis", 
        $penerbit = "Penerbit", $harga = 0) {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public $judul, $penulis, $penerbit, $harga;
    protected $diskon = 20;

    public function getLabel() {
        return "$this->judul, $this->penerbit";
    }

    public function getDiskon() {
        return $this->diskon;
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
    public $durasi;
    public function __construct($judul = "Judul Produk / Game", 
    $penulis = "Penulis", 
    $penerbit = "Penerbit", 
    $harga = 0,
    $durasi = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->durasi = $durasi;
    }

    public function getDetailProduct() {
        return "Buku: " . parent::getDetailProduct() . " - $this->durasi Halaman";
    }
}

class Video extends Product {
    public $durasi;
    public function __construct($judul = "Judul Produk / Game", 
    $penulis = "Penulis", 
    $penerbit = "Penerbit", 
    $harga = 0,
    $durasi = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->durasi = $durasi;
    }

    public function getDetailProduct() {
        return "Video: " . parent::getDetailProduct() . " ~ $this->durasi Jam";
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

echo "<hr>";

echo $buku->getDiskon();

