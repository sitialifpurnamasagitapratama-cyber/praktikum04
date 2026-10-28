
<?php
declare(strict_types=1);

class LatihanMethod
{
    public function __call(string $namaMethod, array $argumen): mixed
    {
        if ($namaMethod === 'sapa') {
            return "Halo, selamat belajar PHP!";
        }

        throw new BadMethodCallException(
            "Method '$namaMethod' tidak tersedia."
        );
    }
}