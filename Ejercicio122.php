<?php

if (isset($_POST["Enviar"])) { //Recogemos los datos al pulsar el boton enviar
    if (
        !empty($_POST["Nif"])
    ) {
        echo $_POST["Nif"] . "<br/>";
    } else {
        echo "<b> 'No definido :( el nif <br/>";
    }

    /**
     * Hacemos las comprobaciones en cada campo, comprobamos que el nombre sea menor de 20 de longitud
     * que no haya valores numericos
     */
    if (
        !empty($_POST["Nombre"])
    ) {
        echo $_POST["Nombre"] . "<br/>";
    } else {
        echo "<b> 'No definido :( el nombre <br/>";
    }

    /**
     * Comprobamos que el apellido no sea numerico y solo tenga letras y lo mostramos por pantalla si todo esta en orden
     */
    if (!empty($_POST["Apellidos"])) {
        echo $_POST["Apellidos"] . "<br/>";
    } else {
        echo "'No definido :( los Apellidos <br/>";
    }


    if (!empty($_POST["Fecha"])) {
        echo $_POST["Fecha"] . "<br/>";
    } else {
        echo "'No definido :( la Fecha de Nacimiento <br/>";
    }

    /**
     * Comprobamos que el email es correcto con la funcion predefinida de filter_var y lo mostramos por pantalla
     */
    if (!empty($_POST["Email"])) {
        echo $_POST["Email"] . "<br/>";
    } else {
        echo "'No definido :( el EMAIL<br/>";
    }

    /**
     * Comprobamos que la contraseña no tenga menos de 6 caracteres y la mostramos por pantalla encriptada con sha1
     */
    if (!empty($_POST["Contra"])) {
        echo $_POST["Contra"] . "<br/>";
    } else {
        echo "'No definido :( la contraseña <br/>";
    }
}
