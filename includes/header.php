<?php
// includes/header.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo defined('PAGE_TITLE') ? PAGE_TITLE . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Add more CSS or Fonts here -->
</head>
<body>
    <header>
        <div class="container">
            <a href="index.php?page=home" class="logo">LABTEK</a>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php?page=home">Inicio</a></li>
                    <li><a href="index.php?page=services">Servicios</a></li>
                    <li><a href="index.php?page=about">Sobre Nosotros</a></li>
                    <li><a href="index.php?page=info">Información</a></li>
                    <li><a href="index.php?page=results">Consultar Resultados</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">
