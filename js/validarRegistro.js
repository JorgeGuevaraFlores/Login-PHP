var formulario = document.getElementById("formulario");

formulario.addEventListener("submit", validar)
function validar (e) {
    e.preventDefault();
    let nombreCompleto = document.getElementById("nombre");
    let email = document.getElementById("email");
    let usuario = document.getElementById("nomUsuario");
    let password = document.getElementById("password");

    if(nombreCompleto.value == ""){
        alert("El nombre completo es necesario");
        nombreCompleto.focus();
        return;
    } else if(email.value == ""){
        alert("El email es necesario");
        email.focus();
        return;
    } else if(usuario.value == ""){
        alert("El nombre de usuario es necesario");
        usuario.focus();
        return;
    } else if(password.value == ""){
        alert("El password es necesario");
        password.focus();
        return;
    }
    return this.submit();
}