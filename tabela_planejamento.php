<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 08/03/16
 * Time: 17:39
 */

include 'database.php';


$sql = "select *
        from planejamento where siape = '$siape' order by id ";

foreach ($con->query($sql) as $row) {
    $inicio = (new DateTime($row['data_inicio_evento']))->format('d/m/Y');
    $fim = (new DateTime($row['data_fim_evento']))->format('d/m/Y');
    echo "<tr> ";
    echo "<td>{$row['siape']}</td>";
    echo "<td>{$row['nome_evento']}</td>";
    echo "<td>{$row['cidade_evento']}</td>";
    echo "<td>$inicio</td>";
    echo "<td>$fim</td>";
    echo "<td> R$ {$row['valor_passagem']}</td>";
    echo "<td>".tipo_evento($row['tipo_evento_capacitacao']) ."</td>";
    echo "<td> R$ {$row['total_diarias']}</td>";
    echo "<td> R$ {$row['inscricao']}</td>";
    echo "<td> R$ ".($row['total_diarias']+$row['valor_passagem']+$row['inscricao']). "</td>";
    echo "<td>{$row['total_pontos']}</td>";
    echo "<td><a href='editar_planejamento.php?id={$row['id']}' ><i class='glyphicon glyphicon-edit'></i></a></td>";
    echo "<td><a href='excluir_planejamento.php?id={$row['id']}' onclick=\"return confirm('Deseja realmente exluir o planejamento?')\"><i class='glyphicon glyphicon-trash'></i></a></td>";

    echo "</tr> ";

}


function tipo_evento($tipo)
{
    $evento = 'N/A';
    switch ($tipo) {
        case 0:
            $evento = "CONNEPI & CONGIC";
            break;
        case 1:
            $evento = "Eventos Internacionais sediados no Brasil";
            break;
        case 2:
            $evento = "Eventos Nacionais sediados no Nordeste";
            break;
        case 3:
            $evento = "Eventos Nacionais em outras regiões";
            break;
        case 4:
            $evento = "Eventos Internacionais sediados na América do Sul";
            break;
        case 5:
            $evento = "Eventos Internacionais sediados fora da América do Sul";
            break;
        case 6:
            $evento = "Eventos Regionais sediados no Nordeste";
            break;
        case 7:
            $evento = "Curso VOLTADO PARA AS ATIVIDADES específicas da área de atuação do servidor no Campus";
            break;
        case 8:
            $evento = "Demais eventos/capacitaçõe";
            break;
        default:
            $evento = "Indefinido";
            break;
    }
    return $evento;
}

