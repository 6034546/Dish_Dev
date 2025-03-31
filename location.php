<?php
include 'includes/header.php';
include 'includes/functions.php';
?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<main>
    <!-- Location Header -->
    <section class="page-header">
        <div class="container">
            <h1>Locatie & Openingstijden</h1>
            <p>Vind ons in het historische centrum van Den Haag</p>
        </div>
    </section>

    <!-- Location Info -->
    <section class="location-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-card">
                        <h2>Adres</h2>
                        <address>
                            Saffraan en Sahara<br>
                            Herengracht 6<br>
                            2511EH Den Haag<br>
                            Nederland
                        </address>
                        
                        <h3>Contact</h3>
                        <ul class="contact-list">
                            <li><i class="fas fa-phone"></i> 088-2324456</li>
                            <li><i class="fas fa-envelope"></i> <a href="mailto:info@saffraanensahara.nl">info@saffraanensahara.nl</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-card">
                        <h2>Openingstijden</h2>
                        <table class="opening-hours">
                            <tr>
                                <td>Maandag:</td>
                                <td>12:00 - 22:00</td>
                            </tr>
                            <tr>
                                <td>Dinsdag:</td>
                                <td>12:00 - 22:00</td>
                            </tr>
                            <tr>
                                <td>Woensdag:</td>
                                <td>12:00 - 22:00</td>
                            </tr>
                            <tr>
                                <td>Donderdag:</td>
                                <td>12:00 - 22:00</td>
                            </tr>
                            <tr>
                                <td>Vrijdag:</td>
                                <td>12:00 - 23:00</td>
                            </tr>
                            <tr>
                                <td>Zaterdag:</td>
                                <td>13:00 - 23:00</td>
                            </tr>
                            <tr>
                                <td>Zondag:</td>
                                <td>13:00 - 22:00</td>
                            </tr>
                        </table>
                        
                        <div class="status-indicator">
                            <?php if (isRestaurantOpen()): ?>
                                <span class="open">Nu geopend</span>
                            <?php else: ?>
                                <span class="closed">Nu gesloten</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2>Vind ons</h2>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.958098932368!2d4.305495515839775!3d52.07794107973322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b72399b5cf2f%3A0x12e48ef6e3ad17e3!2sHerengracht%206%2C%202511%20EH%20Den%20Haag!5e0!3m2!1sen!2snl!4v1648553412694!5m2!1sen!2snl" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Directions -->
    <section class="directions">
        <div class="container">
            <h2>Bereikbaarheid</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="direction-card">
                        <i class="fas fa-car"></i>
                        <h3>Met de auto</h3>
                        <p>Er zijn verschillende parkeergarages in de buurt, waaronder parkeergarage Museumkwartier en Parkeren Centrum Den Haag.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="direction-card">
                        <i class="fas fa-train"></i>
                        <h3>Met het openbaar vervoer</h3>
                        <p>Vanaf Den Haag Centraal is het ongeveer 10 minuten lopen. U kunt ook tram 1, 15 of 17 nemen en uitstappen bij halte Kneuterdijk.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="direction-card">
                        <i class="fas fa-bicycle"></i>
                        <h3>Met de fiets</h3>
                        <p>Er zijn diverse fietsenstallingen in de buurt. De dichtstbijzijnde bevindt zich op het Plein.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nearby Attractions -->
    <section class="nearby">
        <div class="container">
            <h2>In de buurt</h2>
            <p>Saffraan & Sahara bevindt zich in het historische centrum van Den Haag, op loopafstand van verschillende bezienswaardigheden:</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="nearby-card">
                        <img src="images/location/binnenhof.jpg" alt="Binnenhof" class="img-fluid">
                        <h3>Binnenhof</h3>
                        <p>Het Binnenhof is het politieke centrum van Nederland en ligt op slechts 5 minuten lopen van ons restaurant.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nearby-card">
                        <img src="images/location/mauritshuis.jpg" alt="Mauritshuis" class="img-fluid">
                        <h3>Mauritshuis</h3>
                        <p>Dit bekende museum met werken van Nederlandse meesters zoals Vermeer en Rembrandt ligt op 7 minuten lopen.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nearby-card">
                        <img src="images/location/paleis-noordeinde.jpg" alt="Paleis Noordeinde" class="img-fluid">
                        <h3>Paleis Noordeinde</h3>
                        <p>Het werkpaleis van de koning bevindt zich op ongeveer 10 minuten lopen van ons restaurant.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="location-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Kom langs en geniet van onze Arabische keuken</h2>
                <p>Reserveer nu een tafel of kom langs tijdens onze openingstijden</p>
                <a href="reservation.php" class="btn btn-primary">Reserveer nu</a>
            </div>
        </div>
    </section>
</main>

<?php
include 'includes/footer.php';
?>