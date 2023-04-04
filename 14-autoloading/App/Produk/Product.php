<?php 
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
?>