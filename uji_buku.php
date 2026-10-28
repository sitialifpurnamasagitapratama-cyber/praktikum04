<?php
declare(strict_types=1);

require_once __DIR__ . '/Buku.php';

echo "<h3>Pengujian Destructor dan Alias</h3>";

// Pengujian 1
echo "<b>Pengujian 1: Menghapus objek tanpa alias</b><br>";

$bukuA = new Buku("Laskar Pelangi", "Andrea Hirata", 2005);

unset($bukuA);

echo "Setelah unset(\$bukuA), destructor langsung dijalankan.<br><br>";

// Pengujian 2
echo "<b>Pengujian 2: Menghapus objek dengan alias</b><br>";

$bukuB = new Buku("Bumi Manusia", "Pramoedya Ananta Toer", 1980);
$aliasBuku = $bukuB;

unset($bukuB);

echo "Setelah unset(\$bukuB), objek masih tersedia melalui alias.<br>";
echo "Judul buku dari alias: {$aliasBuku->judul}<br>";

unset($aliasBuku);

echo "Setelah unset(\$aliasBuku), destructor dijalankan.<br><br>";

// Pengujian 3
echo "<b>Pengujian 3: Objek tanpa unset</b><br>";

$bukuC = new Buku("Perahu Kertas", "Dee Lestari", 2009);

echo "Objek masih digunakan hingga skrip berakhir.<br>";