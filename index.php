<?php

if (isset($_POST["Enviar"])) { //Recogemos los datos al pulsar el boton enviar
    if (
        !empty($_POST["Nif"]) && strlen($_POST["Nif"]) <= 20
        && !is_numeric($_POST["Nif"]) && preg_match("/[0-9]/", $_POST["Nif"])
    ) {
        echo $_POST["Nif"] . "<br/>";
    } else {
        echo "<b> Compruebe que ha rellenado bien los datos o no esten vacios </b><br/>";
    }

    /**
     * Hacemos las comprobaciones en cada campo, comprobamos que el nombre sea menor de 20 de longitud
     * que no haya valores numericos
     */
    if (
        !empty($_POST["Nombre"]) && strlen($_POST["Nombre"]) <= 20
        && !is_numeric($_POST["Nombre"]) && preg_match("/[0-9]/", $_POST["Nombre"])
    ) {
        echo $_POST["Nombre"] . "<br/>";
    } else {
        echo "<b> Compruebe que ha rellenado bien los datos o no esten vacios </b><br/>";
    }

    /**
     * Comprobamos que el apellido no sea numerico y solo tenga letras y lo mostramos por pantalla si todo esta en orden
     */
    if (!empty($_POST["Apellidos"]) && !is_numeric($_POST["Apellidos"]) && preg_match("/[0-9]/", $_POST["Apellidos"])) {
        echo $_POST["Apellidos"] . "<br/>";
    } else {
        echo "<b> Compruebe que ha rellenado bien los datos o no esten vacios </b><br/>";
    }


    if (!empty($_POST["Fecha"])) {
        echo $_POST["Fecha"] . "<br/>";
    } else {
        echo "<b> Compruebe que ha rellenado bien los datos o no esten vacios </b><br/>";
    }

    /**
     * Comprobamos que el email es correcto con la funcion predefinida de filter_var y lo mostramos por pantalla
     */
    if (!empty($_POST["Email"]) && filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)) {
        echo $_POST["Email"] . "<br/>";
    } else {
        echo "<b> Compruebe que ha rellenado bien los datos o no esten vacios </b><br/>";
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
