<?php
{
class BangunDatar {
    public $phi;

    // Constructor
    public function __construct($phi = 3.14) {
        $this->phi = $phi;
    }

    // 1. Persegi
    public function persegi($sisi) {
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "=== PERSEGI ===<br>";
        echo "Sisi: " . $sisi . "<br>";
        echo "Luas: " . $luas . "<br>";
        echo "Keliling: " . $keliling . "<br><br>";
    }

    // 2. Persegi Panjang
    public function persegiPanjang($panjang, $lebar) {
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        echo "=== PERSEGI PANJANG ===<br>";
        echo "Panjang: " . $panjang . "<br>";
        echo "Lebar: " . $lebar . "<br>";
        echo "Luas: " . $luas . "<br>";
        echo "Keliling: " . $keliling . "<br><br>";
    }

    // 3. Segitiga
    public function segitiga($alas, $tinggi, $sisi1, $sisi2, $sisi3) {
        $luas = 0.5 * $alas * $tinggi;
        $keliling = $sisi1 + $sisi2 + $sisi3;

        echo "=== SEGITIGA ===<br>";
        echo "Alas: " . $alas . "<br>";
        echo "Tinggi: " . $tinggi . "<br>";
        echo "Sisi 1: " . $sisi1 . "<br>";
        echo "Sisi 2: " . $sisi2 . "<br>";
        echo "Sisi 3: " . $sisi3 . "<br>";
        echo "Luas: " . $luas . "<br>";
        echo "Keliling: " . $keliling . "<br><br>";
    }

    // 4. Lingkaran
    public function lingkaran($jariJari) {
        $luas = $this->phi * $jariJari * $jariJari;
        $keliling = 2 * $this->phi * $jariJari;

        echo "=== LINGKARAN ===<br>";
        echo "Jari-jari: " . $jariJari . "<br>";
        echo "Phi: " . $this->phi . "<br>";
        echo "Luas: " . $luas . "<br>";
        echo "Keliling: " . $keliling . "<br><br>";
    }

    // 5. Trapesium
    public function trapesium($sisiAtas, $sisiBawah, $tinggi, $sisiMiring1, $sisiMiring2) {
        $luas = 0.5 * ($sisiAtas + $sisiBawah) * $tinggi;
        $keliling = $sisiAtas + $sisiBawah + $sisiMiring1 + $sisiMiring2;

        echo "=== TRAPESIUM ===<br>";
        echo "Sisi Atas: " . $sisiAtas . "<br>";
        echo "Sisi Bawah: " . $sisiBawah . "<br>";
        echo "Tinggi: " . $tinggi . "<br>";
        echo "Sisi Miring 1: " . $sisiMiring1 . "<br>";
        echo "Sisi Miring 2: " . $sisiMiring2 . "<br>";
        echo "Luas: " . $luas . "<br>";
        echo "Keliling: " . $keliling . "<br><br>";
    }
}

// Membuat objek
$bangun = new BangunDatar(3.14);

echo "<h2>HASIL PERHITUNGAN BANGUN DATAR</h2>";

// Memanggil setiap method
$bangun->persegi(5);
$bangun->persegiPanjang(10, 5);
$bangun->segitiga(6, 4, 5, 5, 6);
$bangun->lingkaran(7);
$bangun->trapesium(8, 12, 5, 5, 5);

}