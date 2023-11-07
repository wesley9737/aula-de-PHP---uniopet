<?php
include "header.php";
$num_um = $_POST['um'];
$num_dois = $_POST['dois'];
$operador = $_POST['op'];

if ($operador == "soma") {
    $resultado = $num_um + $num_dois;
    echo "$num_um + $num_dois = $resultado";
} elseif ($operador == "sub") {
    $resultado = $num_um - $num_dois;
    echo "$num_um - $num_dois = $resultado";
} elseif ($operador == "multi") {
    $resultado = $num_um * $num_dois;
    echo "$num_um * $num_dois = $resultado";
} elseif ($operador == "div") {
    if ($num_dois == 0) {
        echo "Não é possível dividir por zero";
    } else {
        $resultado = $num_um / $num_dois;
        echo "$num_um / $num_dois = $resultado";
    }
} else {
    echo "Operador inválido";
}
?>
