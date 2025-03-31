<?php
include 'includes/header.php';
include 'includes/functions.php';

$success = false;
$error = '';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate the inputs
    $name = isset($_POST['name']) ? sanitizeInput($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitizeInput($_POST['phone']) : '';
    $date = isset($_POST['date']) ? sanitizeInput($_POST['date']) : '';
    $time = isset($_POST['time']) ? sanitizeInput($_POST['time']) : '';
    $guests = isset($_POST['guests']) ? (int)$_POST['guests'] : 0;
    $message = isset($_POST['message']) ? sanitizeInput($_POST['message']) : '';
    
    // Validation
    if (empty($name) || empty($email) || empty($phone) || empty($date) || empty($time) || $guests < 1) {
        $error = "Alle velden met een * zijn verplicht.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Vul een geldig e-mailadres in.";
    } else {
        // Save reservation
        $result = saveReservation($name, $email, $phone, $date, $time, $guests, $message);
        
        if ($result === true) {
            $success = true;
        } else {
            $error = "Er is een fout opgetreden. Probeer het later opnieuw of neem telefonisch contact met ons op.";
        }
    }
}
?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<main>
    <!-- Reservation Header -->
    <section class="page-header">
        <div class="container">
            <h1>Reserveren</h1>
            <p>Reserveer een tafel bij Saffraan & Sahara</p>
        </div>
    </section>

    <!-- Reservation Info -->
    <section class="reservation-info">
        <div class="container">
            <div class="info-content">
                <h2>Informatie over reserveringen</h2>
                <ul>
                    <li>Reserveringen kunnen tot 24 uur van tevoren worden gemaakt.</li>
                    <li>We houden uw tafel 15 minuten vast na de gereserveerde tijd.</li>
                    <li>Voor groepen groter dan 8 personen verzoeken wij u telefonisch contact op te nemen.</li>
                    <li>Voor speciale gelegenheden of catering kunt u contact opnemen via het contactformulier of telefonisch.</li>
                    <li>Bij speciale wensen of dieetwensen kunt u dit aangeven in het opmerkingenveld.</li>
                </ul>
            </div>
        </div>
    </section>

    <?php if ($success): ?>
    <!-- Success Message -->
    <section class="reservation-success">
        <div class="container">
            <div class="success-content">
                <i class="fas fa-check-circle"></i>
                <h2>Uw reservering is geslaagd!</h2>
                <p>Bedankt voor uw reservering bij Saffraan & Sahara.</p>
                <p>We hebben een bevestiging gestuurd naar uw e-mailadres.</p>
                <p>Uw reserveringsinformatie:</p>
                <ul>
                    <li><strong>Naam:</strong> <?php echo htmlspecialchars($name); ?></li>
                    <li><strong>Datum:</strong> <?php echo formatDutchDate($date); ?></li>
                    <li><strong>Tijd:</strong> <?php echo htmlspecialchars($time); ?></li>
                    <li><strong>Aantal personen:</strong> <?php echo htmlspecialchars($guests); ?></li>
                </ul>
                <p>Heeft u vragen over uw reservering? Neem gerust contact met ons op.</p>
                <a href="index.php" class="btn btn-primary">Terug naar homepage</a>
            </div>
        </div>
    </section>
    <?php else: ?>
    <!-- Reservation Form -->
    <section class="reservation-form">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="form-container">
                        <h2>Reserveringsformulier</h2>
                        
                        <?php if (!empty($error)): ?>
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>
                        
                        <form id="reservationForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="form-group">
                                <label for="name">Naam *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">E-mail *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Telefoonnummer *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="date">Datum *</label>
                                    <input type="date" class="form-control" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="time">Tijd *</label>
                                    <select class="form-control" id="time" name="time" required>
                                        <option value="">Selecteer tijd</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>
                                        <option value="21:00">21:00</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="guests">Aantal personen *</label>
                                <select class="form-control" id="guests" name="guests" required>
                                    <option value="">Selecteer aantal</option>
                                    <?php for ($i = 1; $i <= 8; $i++): ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?> <?php echo $i == 1 ? 'persoon' : 'personen'; ?></option>
                                    <?php endfor; ?>
                                </select>
                                <small class="form-text text-muted">Voor groepen groter dan 8 personen, bel ons a.u.b. op 088-2324456.</small>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Speciale wensen of opmerkingen</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            </div>
                            
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="termsCheck" required>
                                <label class="form-check-label" for="termsCheck">Ik ga akkoord met de <a href="#" data-toggle="modal" data-target="#termsModal">voorwaarden</a> *</label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-block">Reservering bevestigen</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="reservation-image">
                        <img src="images/restaurant-interior.jpg" alt="Restaurant interieur" class="img-fluid rounded">
                        <div class="contact-info">
                            <h3>Liever telefonisch reserveren?</h3>
                            <p>Bel ons op <a href="tel:0882324456">088-2324456</a></p>
                            <p>We zijn dagelijks geopend van 12:00 tot 22:00.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Terms Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termsModalLabel">Reserveringsvoorwaarden</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Reserveringsbeleid Saffraan & Sahara</h5>
                    <p>Door een reservering te maken bij ons restaurant, gaat u akkoord met de volgende voorwaarden:</p>
                    <ol>
                        <li>Annuleringen dienen minimaal 24 uur van tevoren te worden doorgegeven.</li>
                        <li>Bij annuleringen binnen 24 uur voor de gereserveerde tijd kunnen kosten in rekening worden gebracht.</li>
                        <li>We houden uw tafel 15 minuten vast na de gereserveerde tijd. Daarna kan de tafel aan andere gasten worden toegewezen.</li>
                        <li>Voor groepen groter dan 8 personen is telefonische reservering vereist.</li>
                        <li>Uw contactgegevens worden alleen gebruikt voor het verwerken van uw reservering en worden niet met derden gedeeld.</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'includes/footer.php';
?>

<script src="js/reservation.js"></script>