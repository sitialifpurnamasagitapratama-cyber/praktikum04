<?php
declare(strict_types=1);

class Buku
{
    public function __construct(
        public string $judul,
        public string $penulis,
        public int $tahun
    ) {
        echo "Constructor: Buku {$this->judul} dibuat.<br>";
    }

    public function tampilInfo(): void
    {
        echo "Judul: {$this->judul}<br>";
        echo "Penulis: {$this->penulis}<br>";
        echo "Tahun: {$this->tahun}<br>";
    }

    public function __destruct()
    {
        echo "Destructor: Buku {$this->judul} dihancurkan.<br>";
    }
}