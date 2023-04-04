<?php
// Interface = template
/* 
    - At least has 1 method
    - No property
    - All child class must implements all interface method
    - Can implements more than one interface
*/

interface InfoProduk {
    public function getDetailProduct();
};

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

    abstract public function getDetail();
};

class Buku extends Product implements InfoProduk {
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
        return "Buku: " . $this->getDetail() . " - $this->durasi Halaman";
    }

    public function getDetail() {
        return "$this->judul | $this->penulis, $this->penerbit (Rp. $this->harga)";
    }
}

class Video extends Product implements InfoProduk {
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
        return "Video: " . $this->getDetail() . " ~ $this->durasi Jam";
    }

    public function getDetail() {
        return "$this->judul | $this->penulis, $this->penerbit (Rp. $this->harga)";
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