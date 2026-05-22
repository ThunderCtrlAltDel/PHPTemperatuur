<?php
include 'head.php';


function berekenTemperatuur($graden, &van_eenheid, $naar_eenheid) {

if ($van_eenheid === $naar_eenheid) {
    return $graden;
}

$resultaat = 0;

if ($van_eenheid === 'celsius' {
    if ($naar_eenheid === 'fahrenheit') {
        $resultaat = $graden * 1.8 + 32;
    }
    elseif ($naar_eenheid === 'kelvin') {
        $resultaat = $graden + 273.15;
    }
}

elseif ($van_eenheid === 'fahrenheit') {
    if ($naar_eenheid === 'kelvin') {
        $resultaat = ($graden - 32) / 1.8 + 273.15; 
    }
    elseif ($naar_eenheid === 'celsius') {
        $resultaat = ($graden - 32) / 1.8;
    }
}

elseif ($van_eenheid === 'kelvin') {
    if ($naar_eenheid === 'fahrenheit') {
        $resultaat = ($graden - 273.15) * 1.8 + 32;
    }
    elseif ($naar_eenheid === 'celsius') {
        $resultaat  = $graden - 273.15;
    }
}

return $resultaat;

}

?>