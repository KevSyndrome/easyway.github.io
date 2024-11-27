function navigateTo(page) {
    window.location.href = page;
}

function togglePassword() {
    const passwordField = document.getElementById('password');
    const passwordType = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = passwordType;
}

document.getElementById("registration-form")?.addEventListener("submit", function(event) {
    event.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm-password").value;

    if (password !== confirmPassword) {
        alert("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
        return;
    }

    alert(`¡Bienvenido, ${name}! Tu registro fue exitoso.`);
    window.location.href = "login.html";
});

document.getElementById("login-form")?.addEventListener("submit", function(event) {
    event.preventDefault();

    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;

    if (email === "" || password === "") {
        alert("Por favor, completa todos los campos.");
        return;
    }

    alert("Inicio de sesión exitoso");
    window.location.href = "index.html";
});
;

function iniciarMap(){
    var coord = {lat:20.6295089 ,lng: -87.0853844};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}
