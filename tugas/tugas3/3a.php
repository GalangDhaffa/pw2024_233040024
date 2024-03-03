<?php
    echo "<h4>Menghitung luas Lingkaran</h4>";
    function LuasLingkaran($r) {
        
        $luas = 3.14 * $r * $r;

        echo "jari-jari = $r cm <br>";
        echo "Luas Lingkaran = $luas cm<sup>2</sup>";

        return $luas;
    }

    LuasLingkaran(10);

    echo "<hr>";
    echo "<h4>Menghitung keliling Lingkaran</h4>";

    function kelilingLingkaran($r) {

        $keliling = 2 * 3.14 * $r;
        
        echo "jari-jari = $r cm <br>";
        echo "Luas Lingkaran = $keliling cm<sup>2</sup>";

        return $keliling;
    }

    kelilinglingkaran(20);
    echo "<br>";