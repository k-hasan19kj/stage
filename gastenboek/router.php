<?php
// router.php

// Definieer een array met routes en de corresponderende bestanden
$routes = [
    'view_entries' => 'view_entries.php',
    'form' => 'form.html',
    'index' => 'index.php',
    'process' => 'process.php',
    // Voeg meer routes toe zoals nodig
];

// Haal de huidige route op, standaard naar de startpagina als de route niet is opgegeven
$route = $_GET['route'] ?? 'index';

// Controleer of de opgegeven route bestaat, laad anders een 404-pagina
if (array_key_exists($route, $routes)) {
    include $routes[$route];
} else {
    include '404.php'; // Laad een 404-pagina als de route niet bestaat
}
?>

