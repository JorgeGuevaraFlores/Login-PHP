var formulario = document.getElementById("formulario");

formulario.addEventListener("submit", validar)
function validar (e) {
    e.preventDefault();
    let usuario = document.getElementById("usuario");
    let password = document.getElementById("password");

    if(usuario.value == ""){
        alert("El usuario es necesario");
        usuario.focus();
        return;
    } else if(password.value == ""){
        alert("El password es necesario");
        password.focus();
        return;
    }
    return this.submit();
}