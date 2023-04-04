<?php 
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
?>