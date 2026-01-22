<?php
// api/index.php
require_once __DIR__ . '/../config/config.php';

// Simple Router
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$allowed_pages = ['home', 'services', 'about', 'info', 'results', 'contact'];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

// Define page title based on current page
$page_titles = [
    'home' => 'Inicio',
    'services' => 'Servicios',
    'about' => 'Sobre Nosotros',
    'info' => 'Información',
    'results' => 'Consultar Resultados',
    'contact' => 'Contacto'
];

define('PAGE_TITLE', $page_titles[$page]);

include __DIR__ . '/../includes/header.php';

// Include the page content
$page_file = __DIR__ . "/../pages/{$page}.php";
if (file_exists($page_file)) {
    include $page_file;
} else {
    echo "<h1>Error 404</h1><p>Página no encontrada.</p>";
}

include __DIR__ . '/../includes/footer.php';
?>
