<?php
include 'includes/header.php';
include 'includes/functions.php';
?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<main>
    <!-- Menu Header -->
    <section class="page-header">
        <article class="container">
            <h1>Ons Menu</h1>
            <p>Ontdek de authentieke smaken van de Arabische keuken</p>
        </article>
    </section>

    <!-- Menu Navigation -->
    <section class="menu-nav">
        <article class="container">
            <article class="menu-tabs">
                <button class="menu-tab active" data-category="all">Alles</button>
                <button class="menu-tab" data-category="voorgerechten">Voorgerechten</button>
                <button class="menu-tab" data-category="soepen">Soepen</button>
                <button class="menu-tab" data-category="hoofdgerechten">Hoofdgerechten</button>
                <button class="menu-tab" data-category="vis">Vis</button>
                <button class="menu-tab" data-category="bijgerechten">Bijgerechten</button>
                <button class="menu-tab" data-category="desserts">Desserts</button>
                <button class="menu-tab" data-category="dranken">Dranken</button>
            </article>
        </article>
    </section>

    <!-- Menu Content -->
    <section class="menu-content">
        <article class="container">
            <!-- Voorgerechten -->
            <article class="menu-section" id="voorgerechten">
                <h2>Voorgerechten</h2>
                <article class="menu-items">
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Hummus</h3>
                            <p>Romige puree van kikkererwten met tahini, citroensap en olijfolie</p>
                        </article>
                        <article class="menu-item-price">€6,50</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Baba Ganoush</h3>
                            <p>Gegrilde aubergine met tahini, knoflook en specerijen</p>
                        </article>
                        <article class="menu-item-price">€6,50</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Fattoush</h3>
                            <p>Frisse salade met geroosterd platbrood, tomaten, komkommer en sumak</p>
                        </article>
                        <article class="menu-item-price">€7,00</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Tabbouleh</h3>
                            <p>Peterseliesalade met bulgur, tomaat, munt en citroen</p>
                        </article>
                        <article class="menu-item-price">€6,50</article>
                    </article>
                </article>
            </article>

            <!-- Soepen -->
            <article class="menu-section" id="soepen">
                <h2>Soepen</h2>
                <article class="menu-items">
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Linzensoep</h3>
                            <p>Traditionele soep met rode linzen en Arabische kruiden</p>
                        </article>
                        <article class="menu-item-price">€5,50</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Harira</h3>
                            <p>Marokkaanse soep met linzen, kikkererwten en vermicelli</p>
                        </article>
                        <article class="menu-item-price">€6,00</article>
                    </article>
                </article>
            </article>

            <!-- Hoofdgerechten -->
            <article class="menu-section" id="hoofdgerechten">
                <h2>Hoofdgerechten</h2>
                <article class="menu-items">
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Mixed Grill</h3>
                            <p>Selectie van gegrild lamsvlees, kipshawarma en kofte, geserveerd met rijst en gegrilde groenten</p>
                        </article>
                        <article class="menu-item-price">€22,50</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Mansaf</h3>
                            <p>Traditioneel gerecht van lamsvlees in yoghurtsaus, geserveerd op saffraan-rijst met pijnboompitten</p>
                        </article>
                        <article class="menu-item-price">€20,50</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Kipshawarma Schotel</h3>
                            <p>Gemarineerde kip van de grill met knoflooksaus, geserveerd met rijst en salade</p>
                        </article>
                        <article class="menu-item-price">€18,50</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Kofte</h3>
                            <p>Gekruide gehaktballetjes van lamsvlees met tomatensaus en rijst</p>
                        </article>
                        <article class="menu-item-price">€19,50</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Vegetarische Couscous</h3>
                            <p>Couscous met gestoofde groenten, rozijnen en kikkererwten</p>
                        </article>
                        <article class="menu-item-price">€16,50</article>
                    </article>
                </article>
            </article>

            <!-- Vis -->
            <article class="menu-section" id="vis">
                <h2>Vis</h2>
                <article class="menu-items">
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Samke Harra</h3>
                            <p>Gegrilde vis met pittige kruiden, geserveerd met rijst en geroosterde groenten</p>
                        </article>
                        <article class="menu-item-price">€21,50</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Tagine van Zeebaars</h3>
                            <p>Zeebaars gestoofd in saffraan-citroensaus met olijven en aardappelen</p>
                        </article>
                        <article class="menu-item-price">€23,50</article>
                    </article>
                </article>
            </article>

            <!-- Bijgerechten -->
            <article class="menu-section" id="bijgerechten">
                <h2>Bijgerechten</h2>
                <article class="menu-items">
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Arabische Rijst</h3>
                            <p>Met saffraan en pijnboompitten</p>
                        </article>
                        <article class="menu-item-price">€4,50</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Gegrilde Groenten</h3>
                            <p>Selectie van seizoensgroenten</p>
                        </article>
                        <article class="menu-item-price">€5,50</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Extra Platbrood</h3>
                            <p>Vers gebakken Arabisch brood</p>
                        </article>
                        <article class="menu-item-price">€2,50</article>
                    </article>
                </article>
            </article>

            <!-- Desserts -->
            <article class="menu-section" id="desserts">
                <h2>Desserts</h2>
                <article class="menu-items">
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Baklava</h3>
                            <p>Assortiment van huisgemaakte zoete bladerdeeggebakjes met noten en honing</p>
                        </article>
                        <article class="menu-item-price">€6,50</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Umm Ali</h3>
                            <p>Warme broodpudding met noten, rozijnen en kokos</p>
                        </article>
                        <article class="menu-item-price">€7,00</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Dadelpudding</h3>
                            <p>Huisgemaakte pudding met verse dadels en kardemom</p>
                        </article>
                        <article class="menu-item-price">€6,50</article>
                    </article>
                </article>
            </article>

            <!-- Dranken -->
            <article class="menu-section" id="dranken">
                <h2>Dranken</h2>
                <article class="menu-items">
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Arabische Koffie</h3>
                            <p>Traditioneel gezette koffie met kardemom</p>
                        </article>
                        <article class="menu-item-price">€3,50</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Verse Muntthee</h3>
                            <p>Met verse munt en naar wens gezoet</p>
                        </article>
                        <article class="menu-item-price">€3,00</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Ayran</h3>
                            <p>Verfrissende yoghurtdrank</p>
                        </article>
                        <article class="menu-item-price">€3,00</article>
                    </article>
                    <article class="menu-item">
                        <article class="menu-item-info">
                            <h3>Verse Sappen</h3>
                            <p>Sinaasappel, granaatappel of mango</p>
                        </article>
                        <article class="menu-item-price">€4,50</article>
                    </article>
                </article>
            </article>
        </article>
    </section>

    <!-- Allergie Notice -->
    <section class="allergie-notice">
        <article class="container">
            <p>Heeft u een allergie? Meld het ons. Wij denken graag met u mee.</p>
            <p>Alle vlees- en kipgerechten zijn halal.</p>
        </article>
    </section>

    <!-- CTA Section -->
    <section class="menu-cta">
        <article class="container">
            <article class="cta-content">
                <h2>Ervaar onze gerechten</h2>
                <p>Reserveer nu een tafel en geniet van onze authentieke Arabische keuken</p>
                <a href="reservation.php" class="btn btn-primary">Reserveer nu</a>
            </article>
        </article>
    </section>
</main>

<?php
include 'includes/footer.php';
?>

<script>
    // Menu filtering functionality
    document.addEventListener('DOMContentLoaded', function() {
        const menuTabs = document.querySelectorAll('.menu-tab');
        const menuSections = document.querySelectorAll('.menu-section');
        
        menuTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                menuTabs.forEach(tab => tab.classList.remove('active'));
                
                // Add active class to clicked tab
                this.classList.add('active');
                
                const category = this.getAttribute('data-category');
                
                // Show all sections if 'all' is selected, otherwise show only the selected category
                if (category === 'all') {
                    menuSections.forEach(section => section.style.display = 'block');
                } else {
                    menuSections.forEach(section => {
                        if (section.id === category) {
                            section.style.display = 'block';
                        } else {
                            section.style.display = 'none';
                        }
                    });
                }
            });
        });
    });
</script>