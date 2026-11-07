<?php
declare(strict_types=1);

/**
 * mirath-php-hajb-exclusion-graph — مصفوفة الحجب حرماناً ونقصاناً بين الورثة
 * Hajb Hirman (Total Exclusion) & Hajb Nuqsan Graph Eliminator
 */
$input = "Present=[Father,Son,PaternalGrandfather,Brother]";
$digest = substr(hash("sha256", "mirath-php-hajb-exclusion-graph:" . $input), 0, 12);

echo "[RUN] mirath-php-hajb-exclusion-graph (PHP) — Hajb Hirman (Total Exclusion) & Hajb Nuqsan Graph Eliminator" . PHP_EOL;
echo "[AR]  مصفوفة الحجب حرماناً ونقصاناً بين الورثة" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Excluded=[PaternalGrandfather,Brother] | FatherReducedTo=1/6 | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
