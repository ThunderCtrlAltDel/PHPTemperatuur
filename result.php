<?php

require_once 'translation.php';
$translation = $GLOBALS['translation'] ?? [];


include 'head.php';

function berekenTemperatuur($graden, $van_eenheid, $naar_eenheid) {
    if ($van_eenheid === $naar_eenheid) {
        return $graden;
    }

    $resultaat = 0;
    if ($van_eenheid === 'celsius') {
        if ($naar_eenheid === 'fahrenheit') { $resultaat = $graden * 1.8 + 32; }
        elseif ($naar_eenheid === 'kelvin') { $resultaat = $graden + 273.15; }
    }
    elseif ($van_eenheid === 'fahrenheit') {
        if ($naar_eenheid === 'kelvin') { $resultaat = ($graden - 32) / 1.8 + 273.15; }
        elseif ($naar_eenheid === 'celsius') { $resultaat = ($graden - 32) / 1.8; }
    }
    elseif ($van_eenheid === 'kelvin') {
        if ($naar_eenheid === 'fahrenheit') { $resultaat = ($graden - 273.15) * 1.8 + 32; }
        elseif ($naar_eenheid === 'celsius') { $resultaat  = $graden - 273.15; }
    }
    return $resultaat;
}

if (isset($_POST['berekenen'])) {
   
    $_SESSION['last_calc'] = [
        'graden' => floatval($_POST['graden']),
        'van_eenheid' => $_POST['van_eenheid'],
        'naar_eenheid' => $_POST['naar_eenheid']
    ];
}


if (isset($_POST['berekenen']) || isset($_SESSION['last_calc'])) {
    $data = isset($_POST['berekenen']) ? $_SESSION['last_calc'] : $_SESSION['last_calc'];
    
    $graden = $data['graden'];
    $van_eenheid = $data['van_eenheid'];
    $naar_eenheid = $data['naar_eenheid'];

    $berekend = berekenTemperatuur($graden, $van_eenheid, $naar_eenheid);

    $isGelijkAan = $translation['is_equal_to'];
    $toonResultaat = $graden . " " . ucfirst($van_eenheid) . " " . $isGelijkAan . " " . round($berekend, 2) . " " . ucfirst($naar_eenheid);  
} 
else { 
    $toonResultaat = $translation['no_data'];
}
?>

<header>
    <h1><?php echo $translation['result_title']; ?></h1>
</header>

<main>
    <div>
        <h2><?php echo $toonResultaat; ?></h2>
    </div>
    
    <p><a href="index.php">&lt;&lt; <?php echo $translation['back_link']; ?></a></p>
</main>

<?php
include 'footer.php';
?>
