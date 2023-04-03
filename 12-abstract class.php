<?php
// Public = can be accessed from instance
// Protected = can be acess from that class and their child
// Private = only in that class can access
abstract class Product {
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

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getDetail() {
        return "$this->judul | $this->penulis, $this->penerbit (Rp. $this->harga)";
    }

    abstract function getDetailProduct();
};

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
        return "Buku: " . parent::getDetail() . " - $this->durasi Halaman";
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
        return "Video: " . parent::getDetail() . " ~ $this->durasi Jam";
    }
}

class Printer {
    public $daftarProduk = [];
    public function tambahProduk( $produk ) {
        $this->daftarProduk[] = $produk;
    }
    public function printDaftarProduk() {
        $str = "DAFTAR PRODUK: <br>";
        foreach ( $this->daftarProduk as $produk) {
            $str .= $produk->getDetailProduct() . "<br>";
        }
        return $str;
    }
}

$produk1 = new Buku("Bahasa Inggris Pemula", "Udin", "Mangga Edu", 50000, 100);
$produk2 = new Video("Course Belajar PHP", "Galih", "Galih Course", 250000, 50);

$daftarProduk = new Printer();
$daftarProduk->tambahProduk($produk1);
$daftarProduk->tambahProduk($produk2);
echo $daftarProduk->printDaftarProduk();