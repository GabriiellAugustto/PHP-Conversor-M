<?php 

include 'conversor.php';

if (isset($_POST['medida'],$_POST['medida2'],$_POST['valor'])) {
    

$medida = $_POST['medida'];
$medida2 = $_POST['medida2'];
$valor = $_POST['valor'];
}

$conversor = new Conversor();

if (isset($_POST['medida'],$_POST['medida2'],$_POST['valor'])) {

switch ($medida) {
    case 'metro':
        $resultado = $conversor->ConverterMetros($medida, $medida2, $valor);
        break;
    case 'centimetro':
        $resultado = $conversor->ConverterCentimetros($medida, $medida2, $valor);
        break;
    case 'quilometro':
        $resultado = $conversor->ConverterQuilometros($medida, $medida2, $valor);
        break;
    case 'milimetro':
        $resultado = $conversor->ConverterMilimetros($medida, $medida2, $valor);
        break;
    default:
        $resultado = "Valor Inválido!";
        break;
}
}
if (isset($_POST['resultado'])) {
$conversor->setValorFinal($resultado);
$valorfinal = $conversor->getValorFinal();
}
?>