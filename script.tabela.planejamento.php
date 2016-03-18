<?php

include_once 'class.planejamentodao.php';
use \IFRN\PlanejamentoDAO;


try {
    $dao = new PlanejamentoDAO();
    $data = $dao->findBySiape($siape);

} catch (Exception $e) {
    echo $e->getMessage();
}

/*$sql = "select *
        from planejamento where siape = '$siape' order by id ";*/

foreach ($data as $row) {
    $planejamento = new \IFRN\Planejamento($row);
    $inicio = new DateTime($planejamento->getDataInicioEvento());
    $inicio = $inicio->format('d/m/Y');
    $fim = new DateTime($planejamento->getDataInicioEvento());
    $fim = $fim->format('d/m/Y');
    echo "<tr> ";
    echo "<td>{$planejamento->getSiape()}</td>";
    echo "<td>{$planejamento->getNomeEvento()}</td>";
    echo "<td>{$planejamento->getCidadeEvento()}</td>";
    echo "<td>$inicio</td>";
    echo "<td>$fim</td>";
    echo "<td>{$planejamento->getValorPassagem() }</td>";
    echo "<td>{$planejamento->getTipoEventoTexto()}</td>";
    echo "<td> R$ {$planejamento->getTotalDiarias()}</td>";
    echo "<td> R$ {$planejamento->getTotalDiarias()}</td>";
    echo "<td> R$ {$planejamento->getTotalRecurso()}</td>";
    echo "<td>{$planejamento->getTotalPontos()}</td>";
    echo "<td><a href='page.planejamento.editar.php?id={$planejamento->getId()}' ><i class='glyphicon glyphicon-edit'></i></a></td>";
    echo "<td><a href='script.planejamento.excluir.php?id={$planejamento->getId()}' ><i class='glyphicon glyphicon-trash'></i></a></td>";

    echo "</tr> ";

}


