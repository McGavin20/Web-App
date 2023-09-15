// Form validation for login
document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    // Validate username and password, and perform login
    // You can use AJAX to send data to the server here
});

// Form validation for registration
document.getElementById('registration-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    // Validate input and perform registration
    // You can use AJAX to send data to the server here
});

// Dynamic CSS
function changeStylesheet(theme) {
    document.getElementById('stylesheet').setAttribute('href', theme + '.css');
}

// Dynamic Navigation Menu
function toggleMenu(menuItem) {
    const item = document.getElementById(menuItem);
    if (item.style.display === 'none' || item.style.display === '') {
        item.style.display = 'block';
    } else {
        item.style.display = 'none';
    }
}
