function loginAdministrador(event) {
    event.preventDefault();
    const usuario = document.getElementById("usuario").value;
    const password = document.getElementById("password").value;

    fetch('login.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify({ usuario, password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = "panel.html";
        } else {
            alert("Usuario o contraseña incorrectos.");
        }
    });
}

function cerrarSesion() {
    window.location.href = "administrativo.html";
}
