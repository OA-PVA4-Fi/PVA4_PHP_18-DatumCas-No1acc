<?php
/* Část 1 */

echo "Úkol-1-1 = " . date("Y-n-d");
echo "Úkol-1-2 = " . date("Y-m-d");
echo "Úkol-1-3 = " . date("H-i-s");
echo "Úkol-1-4 = " . date("Y-m-d  H:i:s");
echo "Úkol-1-5 = " . date("d. m. Y H:i");


/* Část 2 */

$today = strtotime("today");
$tomorow = strtotime("+ 1 day");
$fday = strtotime("first day of next month");
$lday = strtotime("last day of next month");
$daybefore = strtotime(" -1 day");
$splatnost = strtotime("+14 day");
$dane = strtotime("-3 day");

echo 'Aktuální datum = '.date("d.m.Y", $today);
echo 'Zítřejší datum = '.date("d.m.Y", $tomorow);
echo 'První den následujícího měsíce = '.date("d-m-Y", $fday);
echo 'Poslední den následujícího měsíce = '.date("d-m-Y", $lday);
echo 'Fčedejší datum = '.date("d.m.Y", $daybefore);
echo 'Den splatnosti = '.date("d.m.Y", $splatnost);
echo 'Zdanitelné plnění = '.date("d.m.Y", $dane);

