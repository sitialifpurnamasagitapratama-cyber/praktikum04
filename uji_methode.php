
<?php
declare(strict_types=1);

require_once __DIR__ . '/LatihanMethod.php';

$objek = new LatihanMethod();

echo "1. Menguji method yang diizinkan\n";
echo $objek->sapa() . "\n";

echo "\n2. Menguji method yang tidak diizinkan\n";

try {
    $objek->methodTidakAda();
} catch (BadMethodCallException $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}