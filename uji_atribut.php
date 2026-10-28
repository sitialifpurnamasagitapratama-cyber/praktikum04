
<?php
declare(strict_types=1);

require_once __DIR__ . '/LatihanAtribut.php';

$objek = new LatihanAtribut();

echo "1. Menguji __set()\n";
$objek->hobi = "Membaca";
echo "Hobi berhasil disimpan.\n";

echo "\n2. Menguji __get()\n";
echo "Hobi: " . $objek->hobi . "\n";

echo "\n3. Menguji __isset()\n";
echo isset($objek->hobi) ? "Hobi tersedia.\n" : "Hobi tidak tersedia.\n";

echo "\n4. Menguji __unset()\n";
unset($objek->hobi);

echo isset($objek->hobi) ? "Hobi masih tersedia.\n" : "Hobi sudah dihapus.\n";