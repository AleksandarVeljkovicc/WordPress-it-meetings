document.addEventListener('DOMContentLoaded', function() {
    const loginButton = document.querySelector('a[href="http://it-meetings.local/wp-login.php"]');
    
    if (loginButton) {
        loginButton.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = 'http://it-meetings.local/log-in/';
        });
    }
});
