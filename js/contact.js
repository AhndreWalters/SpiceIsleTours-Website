const urlParams = new URLSearchParams(window.location.search);
const status = urlParams.get('status');

if(status === 'success') {
    document.getElementById('form-messages').innerHTML = 
        '<div class="alert-success">Message sent successfully! We will contact you soon.</div>';
} else if(status === 'error') {
    document.getElementById('form-messages').innerHTML = 
        '<div class="alert-error">Error sending message. Please try again.</div>';
}