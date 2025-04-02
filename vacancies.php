<?php
include 'includes/header.php';
include 'includes/functions.php';

// Get vacancies from database/function
$vacancies = getVacancies();
?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<main>
    <!-- Vacancies Header -->
    <section class="page-header">
        <article class="container">
            <h1>Vacatures</h1>
            <p>Word onderdeel van het Saffraan & Sahara team</p>
        </article>
    </section>

    <!-- About Working Here -->
    <section class="work-culture">
        <article class="container">
            <article class="row">
                <article class="col-md-6">
                    <article class="culture-content">
                        <h2>Werken bij Saffraan & Sahara</h2>
                        <p>Bij Saffraan & Sahara vinden we het belangrijk dat onze medewerkers zich thuis voelen en met plezier werken. We zijn een hecht team met een passie voor de Arabische keuken en gastvrijheid.</p>
                        <p>We bieden:</p>
                        <ul>
                            <li>Een dynamische werkomgeving in een authentiek Arabisch restaurant</li>
                            <li>Marktconforme salariëring</li>
                            <li>Flexibele werkuren</li>
                            <li>Gratis personeelsmaaltijden</li>
                            <li>Doorgroeimogelijkheden</li>
                            <li>Een gezellig en articleers team</li>
                        </ul>
                    </article>
                </article>
                <article class="col-md-6">
                    <article class="culture-image">
                        <img src="images/team.jpg" alt="Ons team" class="img-fluid rounded">
                    </article>
                </article>
            </article>
        </article>
    </section>

    <!-- Current Vacancies -->
    <section class="current-vacancies">
        <article class="container">
            <h2>Actuele vacatures</h2>
            
            <?php if (empty($vacancies)): ?>
                <article class="no-vacancies">
                    <p>Er zijn op dit moment geen vacatures beschikbaar.</p>
                    <p>Interesse om bij ons te werken? Stuur een open sollicitatie naar <a href="mailto:vacatures@saffraanensahara.nl">vacatures@saffraanensahara.nl</a></p>
                </article>
            <?php else: ?>
                <article class="vacancy-list">
                    <?php foreach ($vacancies as $vacancy): ?>
                        <article class="vacancy-card">
                            <article class="vacancy-meta">
                                <span><i class="fas fa-clock"></i> <?php echo htmlspecialchars($vacancy['hours']); ?> uur per week</span>
                                <span><i class="fas fa-calendar-alt"></i> Geplaatst op <?php echo formatDutchDate($vacancy['date_posted']); ?></span>
                            </article>
                            <article class="vacancy-description">
                                <?php echo $vacancy['description']; ?>
                            </article>
                            <article class="vacancy-requirements">
                                <h4>Wij zoeken iemand die:</h4>
                                <ul>
                                    <?php 
                                    $requirements = explode("\n", $vacancy['requirements']);
                                    foreach ($requirements as $requirement): 
                                        if (!empty(trim($requirement))):
                                    ?>
                                        <li><?php echo htmlspecialchars(trim($requirement)); ?></li>
                                    <?php 
                                        endif;
                                    endforeach; 
                                    ?>
                                </ul>
                            </article>
                            <article class="vacancy-offer">
                                <h4>Wij bieden:</h4>
                                <ul>
                                   <?php 
                                    if (!empty($vacancy['offer'])) {
                                        $offers = explode("\n", $vacancy['offer']);
                                    foreach ($offers as $offer): 
                                    if (!empty(trim($offer))):
                                    ?>
                                       <li><?php echo htmlspecialchars(trim($offer)); ?></li>
                                   <?php 
                                   endif;
                                   endforeach; 
                                   } else {
                                       echo '<li>Geen informatie beschikbaar.</li>';
                                       }
                                       ?>
    </ul>
</article>
                            </article>
                            <article class="vacancy-footer">
                                <a href="vacancy-apply.php?id=<?php echo $vacancy['id']; ?>" class="btn btn-primary">Solliciteer nu</a>
                            </article>
                        </article>
                    <?php endforeach; ?>
                </article>
            <?php endif; ?>
        </article>
    </section>

    <!-- Open Application -->
    <section class="open-application">
        <article class="container">
            <article class="application-content">
                <h2>Open sollicitatie</h2>
                <p>Geen passende vacature gevonden, maar wel interesse om bij ons te werken? Stuur een open sollicitatie!</p>
                <p>We zijn altijd op zoek naar getalenteerde en gemotiveerde mensen voor verschillende functies in ons restaurant.</p>
                <a href="mailto:vacatures@saffraanensahara.nl" class="btn btn-secondary">Stuur een open sollicitatie</a>
            </article>
        </article>
    </section>

    <!-- Testimonials -->
    <section class="employee-testimonials">
        <article class="container">
            <h2>Wat onze medewerkers zeggen</h2>
            <article class="testimonial-slider">
                <article class="testimonial-card">
                    <article class="testimonial-image">
                    </article>
                    <article class="testimonial-content">
                        <p>"Als kok bij Saffraan & Sahara heb ik de kans gekregen om mijn passie voor de Arabische keuken verder te ontwikkelen. De sfeer is geweldig en we werken echt als een team samen."</p>
                        <p class="testimonial-name">- Mohammed, Kok</p>
                    </article>
                </article>
                <article class="testimonial-card">
                    <article class="testimonial-image">
                    </article>
                    <article class="testimonial-content">
                        <p>"Ik ben begonnen als serveerster en ben nu assistent-manager. Saffraan & Sahara biedt echt doorgroeimogelijkheden en investeert in de ontwikkeling van medewerkers."</p>
                        <p class="testimonial-name">- Lisa, Assistent-manager</p>
                    </article>
                </article>
                <article class="testimonial-card">
                    <article class="testimonial-image">
                    </article>
                    <article class="testimonial-content">
                        <p>"Als student werk ik parttime bij Saffraan & Sahara. De flexibele werktijden zijn perfect te combineren met mijn studie en de werksfeer is super!"</p>
                        <p class="testimonial-name">- Sander, Medewerker bediening</p>
                    </article>
                </article>
            </article>
        </article>
    </section>

    <!-- Contact CTA -->
    <section class="vacancy-cta">
        <article class="container">
            <article class="cta-content">
                <h2>Vragen over werken bij Saffraan & Sahara?</h2>
                <p>Neem contact met ons op voor meer informatie</p>
                <a href="mailto:vacatures@saffraanensahara.nl" class="btn btn-primary">Contact opnemen</a>
            </article>
        </article>
    </section>
</main>

<?php
include 'includes/footer.php';
?>