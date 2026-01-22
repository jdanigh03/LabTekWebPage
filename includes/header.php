<?php
// includes/header.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo defined('PAGE_TITLE') ? PAGE_TITLE . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <a href="index.php?page=home" class="logo">
                <img src="assets/img/labtek-logo-of.jpeg" alt="LABTEK Logo">
            </a>
            <button class="mobile-toggle" aria-label="Abrir menú" aria-expanded="false">
                <i class="fas fa-bars"></i>
            </button>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php?page=home">Inicio</a></li>
                    <li><a href="index.php?page=services">Servicios</a></li>
                    <li><a href="index.php?page=about">Sobre Nosotros</a></li>
                    <li><a href="index.php?page=contact" class="contact-link">Contacto</a></li>
                </ul>
            </nav>
            <a href="https://wa.me/59169813222" class="btn-whatsapp" target="_blank">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
        </div>
    </header>
    <main>
