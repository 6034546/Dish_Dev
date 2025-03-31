<?php
include 'includes/header.php';
include 'includes/functions.php';

// Get vacancy ID from query string
$vacancyId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch vacancy details
$vacancy = getVacancyById($vacancyId);
if (!$vacancy) {
    echo "<p>Vacature niet gevonden.</p>";
    include 'includes/footer.php';
    exit;
}
?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<main>
    <section class="apply-header">
        <div class="container">
            <h1>Solliciteer voor: <?php echo htmlspecialchars($vacancy['title']); ?></h1>
            <p>Vul het onderstaande formulier in om te solliciteren.</p>
        </div>
    </section>

    <section class="apply-form">
        <div class="container">
            <form action="submit-application.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="vacancy_id" value="<?php echo $vacancyId; ?>">
                
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="email">E-mailadres</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Telefoonnummer</label>
                    <input type="text" id="phone" name="phone" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Motivatie</label>
                    <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="cv">Upload je CV</label>
                    <input type="file" id="cv" name="cv" class="form-control-file" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Verstuur sollicitatie</button>
            </form>
        </div>
    </section>
</main>

<?php
include 'includes/footer.php';
?>
