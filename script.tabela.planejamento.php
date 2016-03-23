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
    $fim = new DateTime($planejamento->getDataFimEvento());
    $fim = $fim->format('d/m/Y');
    if($planejamento->getStatus()==0){
        echo "<tr class='warning'> ";
    }elseif ( $planejamento->getStatus()==1){
        echo "<tr class='danger'> ";

    }else{
        echo "<tr class='sucess'> ";

    }

    echo "<td>{$planejamento->getPrioridade()}</td>";
    echo "<td>{$planejamento->getSiape()}</td>";
    echo "<td>{$planejamento->getNomeEvento()}</td>";
    echo "<td>{$planejamento->getCidadeEvento()}</td>";
    echo "<td>$inicio</td>";
    echo "<td>$fim</td>";
    echo "<td> R$ {$planejamento->getValorPassagem() }</td>";
    echo "<td>{$planejamento->getTipoEventoTexto()}</td>";
    echo "<td> R$ {$planejamento->calcular_diarias()}</td>";
    echo "<td> R$ {$planejamento->getInscricao()}</td>";
    echo "<td> R$ {$planejamento->getTotalRecurso()}</td>";
    echo "<td>{$planejamento->calcular_pontos()}</td>";
    echo "<td><a href='page.planejamento.editar.php?id={$planejamento->getId()}'  ><i class='glyphicon glyphicon-edit'></i></a></td>";
    echo "<td><a href='script.planejamento.excluir.php?id={$planejamento->getId()}' onclick='return confirm(\'Deseja excluir\')' ><i class='glyphicon glyphicon-trash'></i></a></td>";

    echo "</tr> ";

}


