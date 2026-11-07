<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$navigation = [
    'index.php' => 'Home',
    'smaken.php' => 'Smaken',
    'categorieen.php' => 'Categorieën',
    'login.php' => 'Log in',
];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IJssalon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <a class="site-title" href="index.php">IJssalon</a>
        <nav aria-label="Hoofdnavigatie">
            <ul class="navigation">
                <?php foreach ($navigation as $page => $label): ?>
                    <li>
                        <a href="<?= htmlspecialchars($page, ENT_QUOTES, 'UTF-8') ?>"
                           <?= $currentPage === $page ? 'aria-current="page"' : '' ?>>
                            <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <main class="main-content">
