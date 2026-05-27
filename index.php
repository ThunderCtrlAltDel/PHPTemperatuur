<?php 
include 'head.php'; 
$translation = $GLOBALS['translation'] ?? [];
?>

<header>
    <h1><?php echo $translation['title']; ?></h1>
</header>

<main>
    <p><?php echo $translation['explanation']; ?></p>
    <h2><?php echo $translation['title']; ?></h2>

    <form action="result.php" method="POST">
        <input type="number" step="1" name="graden" required>

        <select name="van_eenheid"> 
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>

        <select name="naar_eenheid">
            <option value="fahrenheit">Fahrenheit</option>
            <option value="celsius">Celsius</option>
            <option value="kelvin">Kelvin</option>
        </select>

        <br><br>

        <button type="submit" name="berekenen"><?php echo $translation['convert']; ?></button>
    </form> </main>

<?php 
include 'footer.php'; 
?>