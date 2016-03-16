<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 09/03/16
 * Time: 18:00
 */

include 'database.php';
include 'auxiliar.php';


session_start();

if (isset($_SESSION["siape"])) {
    $nome_evento = $_POST['nome_evento'];
    $cidade_evento = $_POST['cidade_evento'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim = $_POST['data_fim'];
    $valor_passagem = $_POST['valor_passagem'];
    $justificativa = $_POST['justificativa'];
    $sitio_evento = $_POST['sitio'];
    $relevancia = $_POST['relevancia'];
    $projeto = $_POST['projetos'];
    $estudo = $_POST['estudo'];
    $titulacao = $_POST['titulacao'];
    $tipo_evento = $_POST['tipo_evento'];
    $tempo_servico = $_POST['tempo_servico'];
    $nacional = $_POST['nacional'];
    $internacional = $_POST['internacional'];
    $inscricao= $_POST['inscricao'];

    $total_diarias = calcular_diarias($data_inicio, $data_fim, $tipo_evento);
    $total_pontos = calcular_pontos($relevancia, $projeto, $estudando, $titulacao, $tipo_evento, $tempo_servico, $nacional, $internacional);
    $siape = $_SESSION['siape'];
    $sql = "INSERT INTO planejamento(siape, nome_evento, cidade_evento, data_inicio_evento, data_fim_evento,
              valor_passagem, justificativa_evento_relevancia, sitio_evento,
              relevancia_evento, projeto_institucional, estudando, numero_evento_nacional, numero_evento_internacional,
              titulacao, tempo_servico, tipo_evento_capacitacao,total_diarias,total_pontos,inscricao)
              VALUES ('$siape','$nome_evento','$cidade_evento','$data_inicio','$data_fim',$valor_passagem,'$justificativa',
              '$sitio_evento',$relevancia,$estudo,$projeto, $nacional,$internacional,$titulacao,$tempo_servico,$tipo_evento,$total_diarias,$total_pontos,$inscricao)";
    $stmt = $con->prepare($sql);

    $stmt->execute();

    echo "<script>
         window.location('planejamento.php');
        </script>";
} else {
    echo "<script>
        alert('Usuário não logado');
        window.location('inicio_planejamento.php');
        </script>";
}


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

