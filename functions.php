<?php

/* třetí Část */

function dateLocalized($mesic)
{
    $Mnazev = array(
        'January' => 'Leden',
        'February' => 'Únor',
        'March' => 'Březen',
        'April' => 'Duben',
        'May' => 'Květen',
        'June' => 'Červen',
        'July' => 'Červenec',
        'August' => 'Srpen',
        'September' => 'Září',
        'October' => 'Říjen',
        'November' => 'Listopad',
        'December' => 'Prosinec'
    );


    $Dnazev = array(
        'Monday' => 'Pondělí',
        'Tuesday' => 'Úterý',
        'Wednesday' => 'Středa',
        'Thursday' => 'Čtvrtek',
        'Friday' => 'Pátek',
        'Saturday' => 'Sobota',
        'Sunday' => 'Neděle'
    );


    return $Mnazev[$mesic];


}

echo dateLocalized('December');



/* čtvrtá Část */

$fdatum = strtotime("today");
$sdatum = strtotime("tomorow");
$vdatum = $fdatum - $sdatum;

echo 'Rozdíl mezi dvěma daty je '. date("j dny, G hodin a i minut.", $vdatum);