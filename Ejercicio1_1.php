<?php
//&& !empty($_POST["Coe1"]) && !empty($_POST["Coe2"]) && !empty($_POST["Coe3"])

if (isset($_POST["Enviar"])) { //Recogemos los datos al pulsar el boton enviar
    $calculo = $_POST["Coe1"] * $_POST["Coe1"] - 4 * $_POST["Coe1"] * $_POST["Coe3"];

    if ($calculo < 0) {
        echo "No existen raices reales :(";
    } else if ($calculo = 0) {
        $calculo = -$_POST["Coe2"] / 2 * $_POST["Coe1"];
        $ecua2;
        $ecua2 = -$_POST["Coe2"] / 2 * $_POST["Coe1"];
        $ecu1 = $ecua2;
        echo $ecua1 . "</br>" . $ecua2 . "</br>";
    } else if ($calculo > 0) {
        $ecua1 = -$_POST["Coe2"] + sqrt($calculo) / 2 * -$_POST["Coe2"] / 2 * $_POST["Coe1"];
        $ecua2 = -$_POST["Coe2"] - sqrt($calculo) / 2 * -$_POST["Coe2"] / 2 * $_POST["Coe1"];
        echo $ecua1 . "</br>" . $ecua2 . "</br>";
    }
} else {
    echo "<b>  No puede estar vacío ningun Coeficiente. </b><br/>";
}
