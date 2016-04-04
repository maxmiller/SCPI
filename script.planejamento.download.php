<?php

include_once 'class.planejamentodao.php';
use \IFRN\PlanejamentoDAO;


try {
    $dao = new PlanejamentoDAO();
    $data = $dao->findAll();

} catch (Exception $e) {
    $html .= $e->getMessage();
}

/*$sql = "select *
        from planejamento where siape = '$siape' order by id ";*/

$html = "<table class=\"table table-striped\">
    <thead>
    <tr>
        <th>P.</th>
        <th>SIAPE</th>
        <th>SERVIDOR</th>
        <th>EVENTO</th>
        <th>JUSTICATIVA</th>
        <th>LOCAL DO EVENTO</th>
        <th>INÍCIO</th>
        <th>FIM</th>
        <th>VALOR PASSAGEM AÉREA</th>
        <th>TIPO DE EVENTO</th>
        <th>RELEVANCIA</th>
        <th>PROJETO INSTITUCIONAL</th>
        <th>ESTUDANDO</th>
        <th>EVENTOS NACIONAIS</th>
        <th>EVENTOS INTERNACIONAIS</th>
        <th>TITULACAO</th>
        <th>TEMPO DE SERVICO</th>
        <th>P. RELEVANCIA</th>
        <th>P. PROJETO INSTITUCIONAL</th>
        <th>P. ESTUDANDO</th>
        <th>P. EVENTOS NACIONAIS</th>
        <th>P. EVENTOS INTERNACIONAIS</th>
        <th>P. TITULACAO</th>
        <th>P. TEMPO DE SERVICO</th>
        <th>P. TIPO DE EVENTO</th>
        <th>TOTAL DE DIÁRIAS</th>
        <th>INSCRIÇÃO</th>
        <th>TOTAL DE RECURSO</th>
        <th>PONTUAÇÃO</th>
        <th>STATUS</th>
    

    </tr>
    </thead>
    <tbody>
    ";

foreach ($data as $row) {
    $planejamento = new \IFRN\Planejamento($row);
    $inicio = new DateTime($planejamento->getDataInicioEvento());
    $inicio = $inicio->format('d/m/Y');
    $fim = new DateTime($planejamento->getDataFimEvento());
    $fim = $fim->format('d/m/Y');
    if ($planejamento->getStatus() == 0) {
        $html .= "<tr class='warning'> ";
    } elseif ($planejamento->getStatus() == 1) {
        $html .= "<tr class='danger'> ";

    } elseif ($planejamento->getStatus() == 2) {
        $total_pasagens_aprovadas += $planejamento->getValorPassagem();
        $total_diarias_aprovadas += $planejamento->calcular_diarias();
        $total_inscricao_aprovada += $planejamento->getInscricao();
        $html .= "<tr class='success'> ";

    }

    $html .= "<td>{$planejamento->getPrioridade()}</td>";
    $html .= "<td>{$planejamento->getSiape()}</td>";
    $html .= "<td>{$planejamento->getNome()}</td>";
    $html .= "<td>{$planejamento->getNomeEvento()}</td>";
    $html .= "<td>{$planejamento->getJustificativaEventoRelevancia()}</td>";
    $html .= "<td>{$planejamento->getCidadeEvento()}</td>";
    $html .= "<td>$inicio</td>";
    $html .= "<td>$fim</td>";
    $html .= "<td>{$planejamento->getValorPassagem() }</td>";
    $html .= "<td>{$planejamento->getTipoEventoTexto()}</td>";
    $html .= "<td>".(($planejamento->getRelevanciaEvento() == 1) ?'Sim':"Não") ."</td>";
    $html .= "<td>".(($planejamento->getProjetoInstitucional() == 1) ?'Sim':"Não") ."</td>";
    $html .= "<td>".(($planejamento->getEstudando() == 1) ?'Sim':"Não" )."</td>";
    $html .= "<td>{$planejamento->getNumeroEventoNacional()}</td>";
    $html .= "<td>{$planejamento->getNumeroEventoInternacional()}</td>";
    $html .= "<td>{$planejamento->getTitulacaoTexto()}</td>";
    $html .= "<td>{$planejamento->getTempoServico()}</td>";
    $html .= "<td>".(($planejamento->getRelevanciaEvento() == 1) ?10:0) ."</td>";
    $html .= "<td>".(($planejamento->getProjetoInstitucional() == 1) ?10:0) . "</td>";
    $html .= "<td>".(($planejamento->getEstudando() == 1) ? 10:0 )."</td>";
    $html .= "<td>".(($planejamento->getNumeroEventoNacional() == 0) ? 15:(10/$planejamento->getNumeroEventoNacional())) ."</td>";
    $html .= "<td>".(($planejamento->getNumeroEventoInternacional() == 0) ? 15:(10/($planejamento->getNumeroEventoInternacional()*2))) ."</td>";
    $html .= "<td>".(($planejamento->getTitulacao() == 0) ? 20: ($planejamento->getTitulacao()==1 ? 15:10) )."</td>";
    $html .= "<td>".(($planejamento->getTempoServico() >=8 ) ? (8*2.5): ($planejamento->getTempoServico()*2.5)) ."</td>";
    $html .= "<td>{$planejamento->getPontosEventos()}</td>";
    $html .= "<td>{$planejamento->calcular_diarias()}</td>";
    $html .= "<td>{$planejamento->getInscricao()}</td>";
    $html .= "<td>{$planejamento->getTotalRecurso()}</td>";
    $html .= "<td>{$planejamento->calcular_pontos()}</td>";
    $html .= "<td>{$planejamento->verificar_status()}</td>";

    $html .= "</tr> ";
}

$html .=" </tbody>
   
</table>";

$arquivo = 'planilha.xls';
header ("Expires: Mon, 26 Jul 2017 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header ("Content-Description: PHP Generated Data" );
// Envia o conteúdo do arquivo
echo $html;
exit;
