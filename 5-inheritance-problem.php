<?php
/*  A special method in a class that run after an instance from class created
*/

class Product {
    public function __construct(
        $jenisProduk, 
        $judul = "Judul Produk / Game", 
        $penulis = "Penulis", 
        $penerbit = "Penerbit", 
        $harga = 0, 
        $durasi = 0 ) {

        $this->judul = $judul;
        $this->jenisProduk = $jenisProduk;
        $this->durasi = $durasi;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }
    
    public $judul, $penulis, $penerbit, $harga, $durasi, $jenisProduk;

    public function getLabel() {
        return "$this->judul, $this->penerbit";
    }

    public function getDetailProduct() {
        $str = "$this->jenisProduk: $this->judul | $this->penulis, $this->penerbit (Rp. $this->harga) - $this->durasi";
        if ($this->jenisProduk === "Buku") {
            $str .= " Halaman";
        };

        if ($this->jenisProduk === "Video") {
            $str .= " Jam";
        };

        return $str;
    }
};

class Printer {
    public function PrintData( Product $product ) {
        $data = "Name: $product->name, Description: $product->description, Brand: $product->brand";
        return $data;
    }
}

$buku = new Product("Buku", "Bahasa Inggris Pemula", "Udin", "Mangga", 50000, 100);
$video = new Product("Video", "Course Belajar PHP", "Galih", "Galih Edu", 250000, 50);

echo($buku->getDetailProduct());
echo($video->getDetailProduct());

// Buku : Bahasa Inggris Pemula | Udin, Mangga (Rp. 50000) - 100 Halaman
// Video : Course Belajar PHP | Galih, Galih Edu (Rp. 250000) ~ 50 Jam