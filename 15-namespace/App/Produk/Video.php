<?php namespace App\Produk;
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
?>