<?php 
// Start session for potential form handling
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saffraan &amp; Sahara</title>
    <meta name="description" content="Authentieke Arabische keuken in het hart van Den Haag">
    <meta name="author" content="<?php echo $author; ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/logo.png">
</head>
<body>
    <header class="site-header">
        <article class="container">
            <article class="header-inner">
                <article class="logo">
                    <a href="index.php">
                        <img src="images/logo.png" alt="Saffraan &amp; Sahara Logo" class="logo-img">
                    </a>
                </article>
                <nav class="main-nav">
                    <button class="menu-toggle" aria-label="Toggle Menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                    <ul class="nav-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php" >Lunch &amp; Diner</a></li>
                        <li><a href="location.php">Openingstijden &amp; Locatie</a></li>
                        <li><a href="reservation.php">Reserveren</a></li>
                        <li><a href="vacancies.php">Vacatures</a></li>
                    </ul>
                </nav>
            </article>
        </article>
    </header>
    <main>
