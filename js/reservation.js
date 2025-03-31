/**
 * Reservation form validation and submission
 */

document.addEventListener('DOMContentLoaded', function() {
    const reservationForm = document.getElementById('reservation-form');
    
    if (reservationForm) {
        reservationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            const guests = document.getElementById('guests').value;
            const date = document.getElementById('date').value;
            const time = document.getElementById('time').value;
            const reservationType = document.getElementById('reservation-type').value;
            const notes = document.getElementById('notes').value.trim();
            
            // Basic validation
            let isValid = true;
            let errorMessages = [];
            
            if (name === '') {
                isValid = false;
                errorMessages.push('Vul alstublieft uw naam in');
                document.getElementById('name').classList.add('error');
            } else {
                document.getElementById('name').classList.remove('error');
            }
            
            if (phone === '') {
                isValid = false;
                errorMessages.push('Vul alstublieft uw telefoonnummer in');
                document.getElementById('phone').classList.add('error');
            } else {
                document.getElementById('phone').classList.remove('error');
            }
            
            if (email === '') {
                isValid = false;
                errorMessages.push('Vul alstublieft uw e-mailadres in');
                document.getElementById('email').classList.add('error');
            } else if (!isValidEmail(email)) {
                isValid = false;
                errorMessages.push('Vul alstublieft een geldig e-mailadres in');
                document.getElementById('email').classList.add('error');
            } else {
                document.getElementById('email').classList.remove('error');
            }
            
            if (date === '') {
                isValid = false;
                errorMessages.push('Selecteer alstublieft een datum');
                document.getElementById('date').classList.add('error');
            } else {
                document.getElementById('date').classList.remove('error');
            }
            
            if (time === '') {
                isValid = false;
                errorMessages.push('Selecteer alstublieft een tijd');
                document.getElementById('time').classList.add('error');
            } else {
                document.getElementById('time').classList.remove('error');
            }
            
            // Display error messages if validation fails
            const errorContainer = document.getElementById('form-errors');
            if (!isValid) {
                let errorHTML = '<ul>';
                errorMessages.forEach(message => {
                    errorHTML += `<li>${message}</li>`;
                });
                errorHTML += '</ul>';
                
                errorContainer.innerHTML = errorHTML;
                errorContainer.style.display = 'block';
                
                // Scroll to error messages
                errorContainer.scrollIntoView({ behavior: 'smooth' });
            } else {
                errorContainer.style.display = 'none';
                
                // Simulate form submission success
                const formContainer = document.getElementById('form-container');
                formContainer.innerHTML = '<p class="success-message">Bedankt! Uw reservering is succesvol ontvangen.</p>';
            }
        });
    }
});

// Helper function to validate email format
function isValidEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}
