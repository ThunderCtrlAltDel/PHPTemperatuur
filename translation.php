<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$all_translations = [
// Engels
'en' => [
"title" => "Convert temperature",
"explanation" => "Use the calculation tool below to quickly convert between two different temperature units (Celsius, Kelvin and Fahrenheit)",
"convert" => "Convert"
],

// Duits
'de' => [
    "title" => "Temperatur umrechnen", 
    "explanation" => "Verwenden Sie das unten stehende Berechnungswerkzeug, um schnell zwischen den verschiedenen Temperatureinheiten (Celsius, Kelvin und Fahrenheit)umzurechnen.",
    "convert" => "Umrechnen"
],

// Nederlands
'nl' => [
    "title" => "Temperatuur omrekenen",
    "explanation" => "Gebruik onderstaande rekentool om snel om te rekenen tussen de verschillende temperatuureenheden (Celsius, Kelvin en Fahrenheit)",
    "convert" => "Omrekenen"
]

];

$default_language = 'nl';

if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $all_translations)) {
    $_SESSION['lang'] = $_GET['lang'];
}

$current_language = $_SESSION['lang'] ?? $default_language;

$translation = $all_translations[$current_language];
$GLOBALS['translation'] = $translation;

?>