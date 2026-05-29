<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$all_translations = [
    'en' => [
        "title" => "Convert temperature",
        "explanation" => "Use the calculation tool below to quickly convert between two different temperature units (Celsius, Kelvin and Fahrenheit)",
        "convert" => "Convert",
        "result_title" => "Calculation Result",
        "is_equal_to" => "is equal to",
        "no_data" => "No data received. Go back to the calculation tool.",
        "back_link" => "Back to the calculation tool"
    ],
    'de' => [
        "title" => "Temperatur umrechnen", 
        "explanation" => "Verwenden Sie das unten stehende Berechnungswerkzeug, um schnell zwischen den verschiedenen Temperatureinheiten (Celsius, Kelvin und Fahrenheit) umzurechnen.",
        "convert" => "Umrechnen",
        "result_title" => "Berechnungsergebnis",
        "is_equal_to" => "ist gleich",
        "no_data" => "Keine Daten empfangen. Zurück zum Berechnungswerkzeug.",
        "back_link" => "Zurück zum Berechnungswerkzeug"
    ],
    'nl' => [
        "title" => "Temperatuur omrekenen",
        "explanation" => "Gebruik onderstaande rekentool om snel om te rekenen tussen de verschillende temperatuureenheden (Celsius, Kelvin en Fahrenheit)",
        "convert" => "Omrekenen",
        "result_title" => "Resultaat Berekening",
        "is_equal_to" => "is gelijk aan",
        "no_data" => "Geen gegevens ontvangen. Ga terug naar de rekentool.",
        "back_link" => "Terug naar de rekentool"
    ]
];

$default_language = 'nl';

if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $all_translations)) {
    $_SESSION['lang'] = $_GET['lang'];
}

$current_language = $_SESSION['lang'] ?? $default_language;
$translation = $all_translations[$current_language];


$GLOBALS['translation'] = $translation;
$GLOBALS['current_language'] = $current_language;
?>