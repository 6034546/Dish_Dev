<?php
include 'includes/header.php';
?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Saffraan & Sahara</h1>
            <p>Authentieke Arabische keuken in het hart van Den Haag</p>
            <a href="reservation.php" class="btn btn-primary">Reserveer nu</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Welkom bij Saffraan & Sahara</h2>
                    <p>Ontdek de rijke smaken en geuren van de Arabische keuken in ons restaurant aan de Herengracht in Den Haag. Wij bieden authentieke gerechten bereid met de beste ingrediënten en traditionele kruiden.</p>
                    <p>Ons team van gepassioneerde koks gebruikt eeuwenoude recepten om u een onvergetelijke culinaire ervaring te bezorgen in een warme, gastvrije omgeving.</p>
                    <a href="menu.php" class="btn btn-secondary">Bekijk ons menu</a>
                </div>
                <div class="col-md-6">
                    <img src="images/restaurant-interior.jpg" alt="Saffraan & Sahara interieur" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Special Dishes Section -->
    <section class="special-dishes">
        <div class="container">
            <h2 class="text-center">Onze specialiteiten</h2>
            <div class="dishes-container">
                <div class="dish-card">
                    <img src="images/dishes/mixed-grill.jpg" alt="Mixed Grill" class="dish-image">
                    <div class="dish-info">
                        <h3>Mixed Grill</h3>
                        <p>Selectie van gegrild lamsvlees, kipshawarma en kofte, geserveerd met rijst en gegrilde groenten</p>
                        <span class="price">€22.50</span>
                    </div>
                </div>
                <div class="dish-card">
                    <img src="images/dishes/mansaf.jpg" alt="Mansaf" class="dish-image">
                    <div class="dish-info">
                        <h3>Mansaf</h3>
                        <p>Traditioneel gerecht van lamsvlees in yoghurtsaus, geserveerd op saffraan-rijst met pijnboompitten</p>
                        <span class="price">€20.50</span>
                    </div>
                </div>
                <div class="dish-card">
                    <img src="images/dishes/samke-harra.jpg" alt="Samke Harra" class="dish-image">
                    <div class="dish-info">
                        <h3>Samke Harra</h3>
                        <p>Gegrilde vis met pittige kruiden, geserveerd met rijst en geroosterde groenten</p>
                        <span class="price">€21.50</span>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="menu.php" class="btn btn-primary">Volledig menu bekijken</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2 class="text-center">Wat onze gasten zeggen</h2>
            <div class="testimonial-slider">
                <div class="testimonial">
                    <p class="quote">"De Mixed Grill bij Saffraan & Sahara is absoluut de beste die ik ooit heb gegeten. Het vlees was perfect gegrild en de kruiden waren heerlijk!"</p>
                    <p class="author">- Jan de Vries</p>
                </div>
                <div class="testimonial">
                    <p class="quote">"Een verborgen parel in Den Haag. Authentieke smaken en een geweldige, gastvrije sfeer. We komen zeker terug!"</p>
                    <p class="author">- Lisa Jansen</p>
                </div>
                <div class="testimonial">
                    <p class="quote">"De baklava hier is hemels! Perfect zoet met een knapperige textuur. Een must-try voor dessertliefhebbers."</p>
                    <p class="author">- Pieter Bakker</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery">
        <div class="container">
            <h2 class="text-center">Sfeerimpressie</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="images/gallery/gallery-1.jpg" alt="Restaurant sfeer" class="img-fluid">
                </div>
                <div class="gallery-item">
                    <img src="images/gallery/gallery-2.jpg" alt="Gerechten" class="img-fluid">
                </div>
                <div class="gallery-item">
                    <img src="images/gallery/gallery-3.jpg" alt="Interieur" class="img-fluid">
                </div>
                <div class="gallery-item">
                    <img src="images/gallery/gallery-4.jpg" alt="Diner sfeer" class="img-fluid">
                </div>
                <div class="gallery-item">
                    <img src="images/gallery/gallery-5.jpg" alt="Keuken" class="img-fluid">
                </div>
                <div class="gallery-item">
                    <img src="images/gallery/gallery-6.jpg" alt="Desserts" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="contact-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Kom langs en proef onze gerechten</h2>
                <p>Reserveer nu een tafel of kom langs tijdens onze openingstijden</p>
                <div class="cta-buttons">
                    <a href="reservation.php" class="btn btn-primary">Reserveer nu</a>
                    <a href="location.php" class="btn btn-secondary">Bekijk locatie</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include 'includes/footer.php';
?>