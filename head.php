<?php 

include_once 'translation.php';

$translation = $GLOBALS['translation'] ?? [];
$current_language = $GLOBALS['current_language'] ?? 'nl';
?>
<!DOCTYPE html>
<html lang="<?php echo $current_language; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translation['title'] ?? 'Temperatuur Omrekenen'; ?></title>
    <link rel="stylesheet" href="style.css?v=1716368400">
</head>
<body>
    <div class="language-switcher">
    <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
    <a href="<?php echo $current_page; ?>?lang=nl" class="<?php echo $current_language === 'nl' ? 'active' : ''; ?>">NL</a>
    <a href="<?php echo $current_page; ?>?lang=en" class="<?php echo $current_language === 'en' ? 'active' : ''; ?>">EN</a>
    <a href="<?php echo $current_page; ?>?lang=de" class="<?php echo $current_language === 'de' ? 'active' : ''; ?>">DE</a>
</div>