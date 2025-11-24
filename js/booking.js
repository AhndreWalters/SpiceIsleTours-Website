const urlParams = new URLSearchParams(window.location.search);
const status = urlParams.get('status');

if(status === 'success') {
    document.getElementById('form-messages').innerHTML = 
        '<div class="alert-success">Booking submitted successfully! We will contact you soon to confirm.</div>';
} else if(status === 'error') {
    document.getElementById('form-messages').innerHTML = 
        '<div class="alert-error">Error submitting booking. Please try again.</div>';
}