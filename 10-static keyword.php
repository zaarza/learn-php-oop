<?php 
    class Contoh {
        public static $nama = "Arza";
        public static $angka = 0;

        public static function sayHello() {
            return "Hello " . self::$nama . "!";
        }

        public static function setAngka($angka) {
            self::$angka = $angka;
        }
    };

    echo Contoh::$nama;
    echo "<br>";
    echo Contoh::sayHello();
?>