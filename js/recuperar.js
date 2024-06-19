document.getElementById('formularioRecuperacion').addEventListener('submit', function(event) {
    event.preventDefault();
    var email = document.getElementById('email').value;

    fetch('./db/recuperar.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ email: email }),
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('message').innerText = data.message;
    })
    .catch((error) => {
        console.error('Error:', error);
    });
});
