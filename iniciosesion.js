$(document).ready(rellenar);

function rellenar() {
    $("#botoninicio").click(inicio);
    $("#botonregistro").click(registro);
}

function inicio() {
    $(this).animate({
        "top": "6px",
        "width": "180px",
        "height": "137px"
    }, {
        "duration": 1000
    });
    $("#botonregistro").fadeOut();
    $(this).html("<label for='inputNombre'>Nombre de usuario:</label>" +
        "<input name='nom' id='inputNombre' type='text'>" +
        "<label for='inputPass'>Contraseña:</label>" +
        "<input name='pass' id='pass' type='password'>" +
        "<input id='submitinicio' type='submit' value='Iniciar Sesión' name='iniciar'>");
}

function registro() {
    $(this).animate({
        "top": "6px",
        "width": "180px",
        "height": "137px"
    }, {
        "duration": 1000
    });
    $("#botoninicio").fadeOut();
    $(this).html("<label for='inputNombre'>Nombre de usuario:</label>" +
        "<input name='nom' id='inputNombre' type='text'>" +
        "<label for='inputPass'>Contraseña:</label>" +
        "<input name='pass' id='pass' type='password'>" +
        "Fan<input id='fan' type='radio'/>" +
        "Musico<input id='musico' type='radio'/>" +
        "Local<input id='local' type='radio'/>" +
        "<input id='submitregistro' type='submit' value='Registrarse' name='enviar'>");
}
