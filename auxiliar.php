<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 09/03/16
 * Time: 18:47
 */


function calcular_diarias($data_inicio, $data_fim, $tipo_evento)
{
    $valor = 0.0;
    // $d1 = new DateTime($data_fim);
    // $d2 = new DateTime($data_inicio);
    $diferenca = diff($data_inicio,$data_fim);
    $dias = $diferenca + 0.5;

    switch ($tipo_evento) {
        case 1:
            $valor = 250 * 4.00 * $dias;
            break;
        default:
            $valor = 210 * $dias;
            break;
    }
    return $valor;
}

function calcular_pontos($relevancia, $projeto, $estudando, $titulacao, $tipo_evento, $tempo_servico, $nacional, $internacional)
{
    $total_pontos = 0.0;
    $total_pontos = $total_pontos + ($relevancia == 1 ? 10.0 : 0.0);
    $total_pontos = $total_pontos + ($projeto == 1 ? 10.0 : 0.0);
    $total_pontos = $total_pontos + ($estudando == 1 ? 10.0 : 0.0);
    switch ($titulacao) {
        case 0:
            $total_pontos = $total_pontos + 20.0;
            break;
        case 1:
            $total_pontos = $total_pontos + 15.0;
            break;
        case 2:
            $total_pontos = $total_pontos + 10.0;
            break;
        default:
            break;
    }
    switch ($tipo_evento) {
        case 0:
            $total_pontos = $total_pontos + 15.0;
            break;
        case 1:
            $total_pontos = $total_pontos + 10.0;
            break;
        case 2:
            $total_pontos = $total_pontos + 09.0;
            break;
        case 3:
            $total_pontos = $total_pontos + 08.0;
            break;
        case 4:
            $total_pontos = $total_pontos + 06.0;
            break;
        case 5:
            $total_pontos = $total_pontos + 04.0;
            break;
        case 6:
            $total_pontos = $total_pontos + 04.0;
            break;
        case 7:
            $total_pontos = $total_pontos + 10.0;
            break;
        case 8:
            $total_pontos = $total_pontos + 03.0;
            break;

        default:
            break;
    }
    $total_pontos = $total_pontos + ($tempo_servico >= 8 ? (8 * 2.5) : ($tempo_servico * 2.5));
    $total_pontos = $total_pontos + ($nacional == 0 ? 15 : (10 / $nacional));
    $total_pontos = $total_pontos + ($internacional == 0 ? 15 : (10 / ($internacional * 2)));
    return $total_pontos;

}


function diff($date1, $date2) {
    $diff = abs(strtotime($date2) - strtotime($date1));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
    return $days;
}
?>