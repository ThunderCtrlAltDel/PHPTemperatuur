<?php 
include 'head.php'; 
?>

<header>
    <h1>Temperatuur omrekenen (Celsius - Kelvin - Fahrenheit)</h1>
</header>

<main>
    <p>Gebruik onderstaande rekentool om snel om te rekenen tussen de verschillende temperatuureenhden (Celsius, Kelvin en Fahrenheit):</p>
    <h2>Temperatuur Omrekenen</h2>

<form action="result.php" method="POST">
    <input type="number" step="1" name="graden" required>

    <select name="van_eenheid"> 
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value="kelvin">Kelvin</option>
    </select>

    <span> >> </span>

    <select name="naar_eenheid">
        <option value="fahrenheit">Fahrenheit</option>
        <option value="celsius">Celsius</option>
        <option value="kelvin">Kelvin</option>
    </select>

    <br><br>

    <button type="submit" name="berekenen">Omrekenen</button>

</main>

<?php 
include 'footer.php'; 
?>