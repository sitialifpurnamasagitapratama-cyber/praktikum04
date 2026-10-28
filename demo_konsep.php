<?php
declare(strict_types=1);

require_once __DIR__ . '/Mahasiswa.php';

define('DEMO_LIFECYCLE', true);

echo "<h3>1. Menjalankan Constructor</h3>";

$m1 = new Mahasiswa("123", "Alya", "Teknik");
$m2 = new Mahasiswa("124", "Budi");

echo $m1->nama . " - " . $m1->fakultas . "<br>";
echo $m2->nama . " - " . $m2->fakultas . "<br>";


echo "<h3>2. Menjalankan Overloading Atribut</h3>";

$m1->ukuranJaket = "M";

echo $m1->ukuranJaket . "<br>";

if (isset($m1->ukuranJaket)) {
    echo "Atribut tersedia<br>";
}

unset($m1->ukuranJaket);

if (!isset($m1->ukuranJaket)) {
    echo "Atribut berhasil dihapus<br>";
}


echo "<h3>3. Menjalankan Overloading Method</h3>";

echo $m1->profilSingkat() . "<br>";

try {
    $m1->methodTidakAda();
} catch (BadMethodCallException $e) {
    echo "Exception: " . htmlspecialchars($e->getMessage()) . "<br>";
}


echo "<h3>4. Menjalankan Destructor</h3>";

unset($m1);

echo "Objek Alya dilepas. Periksa log PHP untuk pesan destructor.<br>";

unset($m2);

echo "Objek Budi dilepas. Periksa log PHP untuk pesan destructor.<br>";