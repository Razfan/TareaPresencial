<?php

if (isset($_POST["Enviar"])) { //Recogemos los datos al pulsar el boton enviar
    if (
        !empty($_POST["Nif"]) && preg_match("/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$/i", $_POST["Nif"])
    ) {
        echo $_POST["Nif"] . "<br/>";
    } else {
        echo "<b>  Está formado por ocho dígitos y una letra. No puede estar vacío. </b><br/>";
    }

    /**
     * Hacemos las comprobaciones en cada campo, comprobamos que el nombre sea menor de 15 de longitud
     * que no haya valores numericos
     */
    if (
        !empty($_POST["Nombre"]) && strlen($_POST["Nombre"]) <= 15
        && !is_numeric($_POST["Nombre"])
    ) {
        echo $_POST["Nombre"] . "<br/>";
    } else {
        echo "<b> Solo puede estar formado por letras y tener una longitud máxima de 15 caracteres. No puede estar vacío. </b><br/>";
    }

    /**
     * Comprobamos que el apellido no sea numerico y solo tenga letras y lo mostramos por pantalla si todo esta en orden
     */
    if (
        !empty($_POST["Apellidos"]) && strlen($_POST["Apellidos"]) <= 20
        && !is_numeric($_POST["Apellidos"])
    ) {
        echo $_POST["Apellidos"] . "<br/>";
    } else {
        echo "<b> Solo puede estar formado por letras y tener una longitud máxima de 20 caracteres. No puede estar vacío. </b><br/>";
    }

    if (!empty($_POST["Fecha"]) && preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-[0-9]{4}$/", $_POST["Fecha"])) {
        echo $_POST["Fecha"] . "<br/>";
        //FORMATO 02-08-1995
    } else {
        echo "<b> No puede estar vacío y tiene un formato fecha de dd-mm-yyyy Ejemplo: 02-08-1995 </b><br/>";
    }

    /**
     * Comprobamos que el email es correcto con la funcion predefinida de filter_var y lo mostramos por pantalla
     */
    if (!empty($_POST["Email"]) && filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
        echo $_POST["Email"] . "<br/>";
    } else {
        echo "<b>  Debe tener una longitud mayor que 6 caracteres. No puede estar vacío. </b><br/>";
    }

    /**
     * Comprobamos que la contraseña no tenga menos de 6 caracteres y la mostramos por pantalla encriptada con sha1
     */
    if (!empty($_POST["Contra"]) && strlen($_POST["Contra"]) >= 6) {
        echo sha1($_POST["Contra"]) . "<br/>";
    } else {
        echo "<b> Compruebe que ha rellenado bien los datos o no esten vacios </b><br/>";
    }
}
