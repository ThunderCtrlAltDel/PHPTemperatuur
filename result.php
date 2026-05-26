<?php
include 'head.php';


function berekenTemperatuur($graden, $van_eenheid, $naar_eenheid) {

if ($van_eenheid === $naar_eenheid) {
    return $graden;
}

$resultaat = 0;

if ($van_eenheid === 'celsius') {
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

if (isset($_POST['berekenen'])) {
    $graden = floatval($_POST['graden']);
    $van_eenheid = $_POST['van_eenheid'];
    $naar_eenheid = $_POST['naar_eenheid'];

    $berekend = berekenTemperatuur($graden, $van_eenheid, $naar_eenheid);

    $toonResultaat = $graden . " " . ucfirst($van_eenheid) . " is gelijk aan " . round($berekend, 2) . " " . ucfirst($naar_eenheid);  
}

else { 
    $toonResultaat = "Geen gegevens ontvangen. Ga terug naar de rekentool.";
}

?>

<header>
    <h1>Resultaat Berekening</h1>
</header>

<main>
    <div>
        <h2><?php echo $toonResultaat; ?></h2>
    </div>
    
    <p><a href="index.php">&lt;&lt; Terug naar de rekentool</a></p>
</main>

<?php
include 'footer.php';
?>