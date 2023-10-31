<?php

class Conversor
{

    private $resultado;

    function setValorFinal($resultado)
    {
        $this->valorFinal = $resultado;
    }

    function getValorFinal()
    {
        return $this->resultado;
    }

    function ConverterMetros($medida, $medida2, $valor)
    {

        switch ($medida2) {
            case 'metro':
                $this->resultado = $valor;
                break;
            case 'quilometro':
                $this->resultado = $valor / 1000;
                break;
            case 'centimetro':
                $this->resultado = $valor * 100;
                break;
            case 'milimetro':
                $this->resultado = $valor * 1000;
                break;
            default:
                break;
        }
        return $this->resultado;
    }

    function ConverterCentimetros($medida, $medida2, $valor)
    {

        switch ($medida2) {
            case 'centimetro':
                $this->resultado = $valor;
                break;
            case 'metro':
                $this->resultado = $valor / 100;
                break;
            case 'quilometro':
                $this->resultado = $valor / 100000;
                break;
            case 'milimetro':
                $this->resultado = $valor * 10;
                break;
            default:
                break;
        }

        return $this->resultado;
    }

    function ConverterQuilometros($medida, $medida2, $valor)
    {

        switch ($medida2) {
            case 'quilometros':
                $this->resultado = $valor;
                break;
            case 'metro':
                $this->resultado = $valor * 100;
                break;
            case 'centimetro':
                $this->resultado = $valor * 100000;
                break;
            case 'milimetro':
                $this->resultado = $valor * 1000000;
                break;
            default:
                break;
        }

        return $this->resultado;
    }

    function ConverterMilimetros($medida, $medida2, $valor)
    {

        switch ($medida2) {
            case 'quilometros':
                $this->resultado = $valor / 1000000;
                break;
            case 'metro':
                $this->resultado = $valor / 1000;
                break;
            case 'centimetro':
                $this->resultado = $valor / 10;
                break;
            default:
                break;
            }

    }
}