<?php 
require 'translation.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_language; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translation['title']; ?></title>
    <link rel="stylesheet" href="style.css?v=1716368400">
</head>

<body>
    <div class="language-switcher">
        <a href="?lang=nl" class="<?php echo $current_language === 'nl' ? 'active' : ''; ?>">NL</a>
        <a href="?lang=en" class="<?php echo $current_language === 'en' ? 'active' : ''; ?>">EN</a>
        <a href="?lang=de" class="<?php echo $current_language === 'de' ? 'active' : ''; ?>">DE</a>
    </div>